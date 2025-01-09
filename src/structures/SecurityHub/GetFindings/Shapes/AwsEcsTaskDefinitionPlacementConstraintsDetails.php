<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property string $Type
 */
class AwsEcsTaskDefinitionPlacementConstraintsDetails extends Shape
{
    /**
     * @param array{
     *     Expression?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
