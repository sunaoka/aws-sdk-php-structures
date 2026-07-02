<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'PERCENTAGE'|'VALUE' $CapType
 * @property string $Target
 */
class DiversityColumn extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     CapType: 'PERCENTAGE'|'VALUE',
     *     Target: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
