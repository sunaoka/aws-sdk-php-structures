<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceMetadataDefaults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'optional'|'required'|null $HttpTokens
 * @property int|null $HttpPutResponseHopLimit
 * @property 'disabled'|'enabled'|null $HttpEndpoint
 * @property 'disabled'|'enabled'|null $InstanceMetadataTags
 * @property 'account'|'declarative-policy'|null $ManagedBy
 * @property string|null $ManagedExceptionMessage
 */
class InstanceMetadataDefaultsResponse extends Shape
{
    /**
     * @param array{
     *     HttpTokens?: 'optional'|'required'|null,
     *     HttpPutResponseHopLimit?: int|null,
     *     HttpEndpoint?: 'disabled'|'enabled'|null,
     *     InstanceMetadataTags?: 'disabled'|'enabled'|null,
     *     ManagedBy?: 'account'|'declarative-policy'|null,
     *     ManagedExceptionMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
