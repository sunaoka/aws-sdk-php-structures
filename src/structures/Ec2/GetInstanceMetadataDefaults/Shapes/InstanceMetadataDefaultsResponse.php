<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceMetadataDefaults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'optional'|'required'|null $HttpTokens
 * @property int|null $HttpPutResponseHopLimit
 * @property 'disabled'|'enabled'|null $HttpEndpoint
 * @property 'disabled'|'enabled'|null $InstanceMetadataTags
 */
class InstanceMetadataDefaultsResponse extends Shape
{
    /**
     * @param array{
     *     HttpTokens?: 'optional'|'required'|null,
     *     HttpPutResponseHopLimit?: int|null,
     *     HttpEndpoint?: 'disabled'|'enabled'|null,
     *     InstanceMetadataTags?: 'disabled'|'enabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
