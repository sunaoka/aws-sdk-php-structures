<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GraderConfig|null $graderConfig
 * @property RFTHyperParameters|null $hyperParameters
 */
class RFTConfig extends Shape
{
    /**
     * @param array{
     *     graderConfig?: GraderConfig|null,
     *     hyperParameters?: RFTHyperParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
