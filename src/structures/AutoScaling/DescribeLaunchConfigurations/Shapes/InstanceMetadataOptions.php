<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLaunchConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'optional'|'required' $HttpTokens
 * @property int<1, 64> $HttpPutResponseHopLimit
 * @property 'disabled'|'enabled' $HttpEndpoint
 */
class InstanceMetadataOptions extends Shape
{
    /**
     * @param array{
     *     HttpTokens?: 'optional'|'required',
     *     HttpPutResponseHopLimit?: int<1, 64>,
     *     HttpEndpoint?: 'disabled'|'enabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
