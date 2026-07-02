<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property array<string, int<1, 200>>|null $Values
 */
class RecommendationDiversityConfig extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Values?: array<string, int<1, 200>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
