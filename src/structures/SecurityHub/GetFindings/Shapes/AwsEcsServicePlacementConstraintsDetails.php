<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Expression
 * @property string|null $Type
 */
class AwsEcsServicePlacementConstraintsDetails extends Shape
{
    /**
     * @param array{
     *     Expression?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
