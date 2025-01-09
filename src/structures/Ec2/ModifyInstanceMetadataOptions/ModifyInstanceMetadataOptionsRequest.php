<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceMetadataOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'optional'|'required' $HttpTokens
 * @property int $HttpPutResponseHopLimit
 * @property 'disabled'|'enabled' $HttpEndpoint
 * @property bool $DryRun
 * @property 'disabled'|'enabled' $HttpProtocolIpv6
 * @property 'disabled'|'enabled' $InstanceMetadataTags
 */
class ModifyInstanceMetadataOptionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     HttpTokens?: 'optional'|'required',
     *     HttpPutResponseHopLimit?: int,
     *     HttpEndpoint?: 'disabled'|'enabled',
     *     DryRun?: bool,
     *     HttpProtocolIpv6?: 'disabled'|'enabled',
     *     InstanceMetadataTags?: 'disabled'|'enabled'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
