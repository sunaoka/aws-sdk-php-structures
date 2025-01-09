<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceMetadataDefaults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'optional'|'required' $HttpTokens
 * @property int $HttpPutResponseHopLimit
 * @property 'disabled'|'enabled' $HttpEndpoint
 * @property 'disabled'|'enabled' $InstanceMetadataTags
 * @property 'account'|'declarative-policy' $ManagedBy
 * @property string $ManagedExceptionMessage
 */
class InstanceMetadataDefaultsResponse extends Shape
{
    /**
     * @param array{
     *     HttpTokens?: 'optional'|'required',
     *     HttpPutResponseHopLimit?: int,
     *     HttpEndpoint?: 'disabled'|'enabled',
     *     InstanceMetadataTags?: 'disabled'|'enabled',
     *     ManagedBy?: 'account'|'declarative-policy',
     *     ManagedExceptionMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
