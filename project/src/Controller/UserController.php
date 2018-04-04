<?php

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
    /**
     *
     * @Method({"GET"})
     * @Route("/user")
     */
    public function getAll()
    {

        $repo = $this->getDoctrine()
            ->getRepository(User::class)->findAll();

        var_dump($repo);exit;

        $repository = new UserRepository;
        $userList   = [
            0 => (object) [
                'id'        => 1,
                'firstName' => 'Romulo',
                'lastName'  => 'Pransteter',
                'gender'    => 'Male',
                'age'       => '30',
                'email'     => 'r.pransteter@gmail.com',
            ],
            1 => (object) [
                'id'        => 2,
                'firstName' => 'Afonso',
                'lastName'  => 'Pransteter',
                'gender'    => 'Male',
                'age'       => '30',
                'email'     => 'r.pransteter@gmail.com',
            ],
            2 => (object) [
                'id'        => 3,
                'firstName' => 'Lineu',
                'lastName'  => 'Pransteter',
                'gender'    => 'Male',
                'age'       => '30',
                'email'     => 'r.pransteter@gmail.com',
            ],
            3 => (object) [
                'id'        => 4,
                'firstName' => 'Golias',
                'lastName'  => 'Pransteter',
                'gender'    => 'Male',
                'age'       => '30',
                'email'     => 'r.pransteter@gmail.com',
            ],
            4 => (object) [
                'id'        => 5,
                'firstName' => 'Ulisses',
                'lastName'  => 'Pransteter',
                'gender'    => 'Male',
                'age'       => '30',
                'email'     => 'r.pransteter@gmail.com',
            ],
        ];

        return new JsonResponse($userList);
    }
}
