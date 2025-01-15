<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateInfrastructureConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $httpTokens
 * @property int<1, 64>|null $httpPutResponseHopLimit
 */
class InstanceMetadataOptions extends Shape
{
    /**
     * @param array{
     *     httpTokens?: string|null,
     *     httpPutResponseHopLimit?: int<1, 64>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
