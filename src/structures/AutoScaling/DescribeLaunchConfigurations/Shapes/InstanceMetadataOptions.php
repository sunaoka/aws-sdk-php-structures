<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLaunchConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'optional'|'required'|null $HttpTokens
 * @property int<1, 64>|null $HttpPutResponseHopLimit
 * @property 'disabled'|'enabled'|null $HttpEndpoint
 */
class InstanceMetadataOptions extends Shape
{
    /**
     * @param array{
     *     HttpTokens?: 'optional'|'required'|null,
     *     HttpPutResponseHopLimit?: int<1, 64>|null,
     *     HttpEndpoint?: 'disabled'|'enabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
