<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property array<string, string>|null $Values
 */
class RecommenderFilter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Values?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
