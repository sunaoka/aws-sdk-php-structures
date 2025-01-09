<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateInfrastructureConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $httpTokens
 * @property int<1, 64> $httpPutResponseHopLimit
 */
class InstanceMetadataOptions extends Shape
{
    /**
     * @param array{
     *     httpTokens?: string,
     *     httpPutResponseHopLimit?: int<1, 64>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
