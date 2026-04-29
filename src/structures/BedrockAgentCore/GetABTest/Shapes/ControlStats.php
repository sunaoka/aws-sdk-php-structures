<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetABTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $variantName
 * @property int $sampleSize
 * @property double $mean
 */
class ControlStats extends Shape
{
    /**
     * @param array{
     *     variantName: string,
     *     sampleSize: int,
     *     mean: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
