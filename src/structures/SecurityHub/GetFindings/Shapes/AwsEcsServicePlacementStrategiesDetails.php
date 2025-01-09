<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Field
 * @property string $Type
 */
class AwsEcsServicePlacementStrategiesDetails extends Shape
{
    /**
     * @param array{
     *     Field?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
