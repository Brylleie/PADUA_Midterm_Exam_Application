<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    
        $restaurants = [
            [
                'name' => "Farmer's Daughter",
                'address' => "Tam-awan Village, Long Long Benguet Rd, Baguio",
                'rating' => 4.5,
                'price_range' => '₱200–400',
                'cuisine' => 'Cordilleran',
                'highlights' => 'Authentic local dishes, cozy atmosphere.',
            ],
            [
                'name' => "Good Taste Restaurant",
                'address' => "Otek St, Baguio",
                'rating' => 4.4,
                'price_range' => '₱200–400',
                'cuisine' => 'Asian',
                'highlights' => 'Generous portions, affordable prices.',
            ],
            [
                'name' => 'Cafe by the Ruins',
                'address' => 'Upper Session Road, Baguio City',
                'rating' => 4.6,
                'price_range' => '₱300–500',
                'cuisine' => 'Cafe',
                'highlights' => 'Cozy atmosphere, great local delicacies.',
            ],
            [
                'name' => 'The Manor at Camp John Hay',
                'address' => 'Camp John Hay, Baguio City',
                'rating' => 4.7,
                'price_range' => '₱500–800',
                'cuisine' => 'International',
                'highlights' => 'Elegant dining, beautiful view.',
            ],
            [
                'name' => 'Choco-late de Batirol',
                'address' => 'Camp John Hay, Baguio City',
                'rating' => 4.5,
                'price_range' => '₱150–300',
                'cuisine' => 'Filipino',
                'highlights' => 'Hot chocolate, traditional Filipino dishes.',
            ],
            [
                'name' => 'The Olive Cafe',
                'address' => 'Baguio Country Club, Baguio City',
                'rating' => 4.3,
                'price_range' => '₱600–900',
                'cuisine' => 'Mediterranean',
                'highlights' => 'Healthy Mediterranean food, relaxing ambiance.',
            ],
            [
                'name' => 'Vizco’s Restaurant and Cake Shop',
                'address' => 'Session Road, Baguio City',
                'rating' => 4.2,
                'price_range' => '₱150–300',
                'cuisine' => 'Café, Filipino',
                'highlights' => 'Famous for strawberry shortcake, cozy vibe.',
            ],
        ];

    
        return view('restaurants.index', compact('restaurants'));
    }
}
