<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Field
 * @property string|null $Type
 */
class AwsEcsServicePlacementStrategiesDetails extends Shape
{
    /**
     * @param array{
     *     Field?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
