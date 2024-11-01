<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto
namespace Google\Analytics\Admin\V1alpha;

use UnexpectedValueException;
/**
 * The category selected for this property, used for industry benchmarking.
 *
 * Protobuf type <code>google.analytics.admin.v1alpha.IndustryCategory</code>
 */
class IndustryCategory
{
    /**
     * Industry category unspecified
     *
     * Generated from protobuf enum <code>INDUSTRY_CATEGORY_UNSPECIFIED = 0;</code>
     */
    const INDUSTRY_CATEGORY_UNSPECIFIED = 0;
    /**
     * Automotive
     *
     * Generated from protobuf enum <code>AUTOMOTIVE = 1;</code>
     */
    const AUTOMOTIVE = 1;
    /**
     * Business and industrial markets
     *
     * Generated from protobuf enum <code>BUSINESS_AND_INDUSTRIAL_MARKETS = 2;</code>
     */
    const BUSINESS_AND_INDUSTRIAL_MARKETS = 2;
    /**
     * Finance
     *
     * Generated from protobuf enum <code>FINANCE = 3;</code>
     */
    const FINANCE = 3;
    /**
     * Healthcare
     *
     * Generated from protobuf enum <code>HEALTHCARE = 4;</code>
     */
    const HEALTHCARE = 4;
    /**
     * Technology
     *
     * Generated from protobuf enum <code>TECHNOLOGY = 5;</code>
     */
    const TECHNOLOGY = 5;
    /**
     * Travel
     *
     * Generated from protobuf enum <code>TRAVEL = 6;</code>
     */
    const TRAVEL = 6;
    /**
     * Other
     *
     * Generated from protobuf enum <code>OTHER = 7;</code>
     */
    const OTHER = 7;
    /**
     * Arts and entertainment
     *
     * Generated from protobuf enum <code>ARTS_AND_ENTERTAINMENT = 8;</code>
     */
    const ARTS_AND_ENTERTAINMENT = 8;
    /**
     * Beauty and fitness
     *
     * Generated from protobuf enum <code>BEAUTY_AND_FITNESS = 9;</code>
     */
    const BEAUTY_AND_FITNESS = 9;
    /**
     * Books and literature
     *
     * Generated from protobuf enum <code>BOOKS_AND_LITERATURE = 10;</code>
     */
    const BOOKS_AND_LITERATURE = 10;
    /**
     * Food and drink
     *
     * Generated from protobuf enum <code>FOOD_AND_DRINK = 11;</code>
     */
    const FOOD_AND_DRINK = 11;
    /**
     * Games
     *
     * Generated from protobuf enum <code>GAMES = 12;</code>
     */
    const GAMES = 12;
    /**
     * Hobbies and leisure
     *
     * Generated from protobuf enum <code>HOBBIES_AND_LEISURE = 13;</code>
     */
    const HOBBIES_AND_LEISURE = 13;
    /**
     * Home and garden
     *
     * Generated from protobuf enum <code>HOME_AND_GARDEN = 14;</code>
     */
    const HOME_AND_GARDEN = 14;
    /**
     * Internet and telecom
     *
     * Generated from protobuf enum <code>INTERNET_AND_TELECOM = 15;</code>
     */
    const INTERNET_AND_TELECOM = 15;
    /**
     * Law and government
     *
     * Generated from protobuf enum <code>LAW_AND_GOVERNMENT = 16;</code>
     */
    const LAW_AND_GOVERNMENT = 16;
    /**
     * News
     *
     * Generated from protobuf enum <code>NEWS = 17;</code>
     */
    const NEWS = 17;
    /**
     * Online communities
     *
     * Generated from protobuf enum <code>ONLINE_COMMUNITIES = 18;</code>
     */
    const ONLINE_COMMUNITIES = 18;
    /**
     * People and society
     *
     * Generated from protobuf enum <code>PEOPLE_AND_SOCIETY = 19;</code>
     */
    const PEOPLE_AND_SOCIETY = 19;
    /**
     * Pets and animals
     *
     * Generated from protobuf enum <code>PETS_AND_ANIMALS = 20;</code>
     */
    const PETS_AND_ANIMALS = 20;
    /**
     * Real estate
     *
     * Generated from protobuf enum <code>REAL_ESTATE = 21;</code>
     */
    const REAL_ESTATE = 21;
    /**
     * Reference
     *
     * Generated from protobuf enum <code>REFERENCE = 22;</code>
     */
    const REFERENCE = 22;
    /**
     * Science
     *
     * Generated from protobuf enum <code>SCIENCE = 23;</code>
     */
    const SCIENCE = 23;
    /**
     * Sports
     *
     * Generated from protobuf enum <code>SPORTS = 24;</code>
     */
    const SPORTS = 24;
    /**
     * Jobs and education
     *
     * Generated from protobuf enum <code>JOBS_AND_EDUCATION = 25;</code>
     */
    const JOBS_AND_EDUCATION = 25;
    /**
     * Shopping
     *
     * Generated from protobuf enum <code>SHOPPING = 26;</code>
     */
    const SHOPPING = 26;
    private static $valueToName = [self::INDUSTRY_CATEGORY_UNSPECIFIED => 'INDUSTRY_CATEGORY_UNSPECIFIED', self::AUTOMOTIVE => 'AUTOMOTIVE', self::BUSINESS_AND_INDUSTRIAL_MARKETS => 'BUSINESS_AND_INDUSTRIAL_MARKETS', self::FINANCE => 'FINANCE', self::HEALTHCARE => 'HEALTHCARE', self::TECHNOLOGY => 'TECHNOLOGY', self::TRAVEL => 'TRAVEL', self::OTHER => 'OTHER', self::ARTS_AND_ENTERTAINMENT => 'ARTS_AND_ENTERTAINMENT', self::BEAUTY_AND_FITNESS => 'BEAUTY_AND_FITNESS', self::BOOKS_AND_LITERATURE => 'BOOKS_AND_LITERATURE', self::FOOD_AND_DRINK => 'FOOD_AND_DRINK', self::GAMES => 'GAMES', self::HOBBIES_AND_LEISURE => 'HOBBIES_AND_LEISURE', self::HOME_AND_GARDEN => 'HOME_AND_GARDEN', self::INTERNET_AND_TELECOM => 'INTERNET_AND_TELECOM', self::LAW_AND_GOVERNMENT => 'LAW_AND_GOVERNMENT', self::NEWS => 'NEWS', self::ONLINE_COMMUNITIES => 'ONLINE_COMMUNITIES', self::PEOPLE_AND_SOCIETY => 'PEOPLE_AND_SOCIETY', self::PETS_AND_ANIMALS => 'PETS_AND_ANIMALS', self::REAL_ESTATE => 'REAL_ESTATE', self::REFERENCE => 'REFERENCE', self::SCIENCE => 'SCIENCE', self::SPORTS => 'SPORTS', self::JOBS_AND_EDUCATION => 'JOBS_AND_EDUCATION', self::SHOPPING => 'SHOPPING'];
    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(\sprintf('Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }
    public static function value($name)
    {
        $const = __CLASS__ . '::' . \strtoupper($name);
        if (!\defined($const)) {
            throw new UnexpectedValueException(\sprintf('Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return \constant($const);
    }
}
