<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceMetadataOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'optional'|'required'|null $HttpTokens
 * @property int|null $HttpPutResponseHopLimit
 * @property 'disabled'|'enabled'|null $HttpEndpoint
 * @property bool|null $DryRun
 * @property 'disabled'|'enabled'|null $HttpProtocolIpv6
 * @property 'disabled'|'enabled'|null $InstanceMetadataTags
 */
class ModifyInstanceMetadataOptionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     HttpTokens?: 'optional'|'required'|null,
     *     HttpPutResponseHopLimit?: int|null,
     *     HttpEndpoint?: 'disabled'|'enabled'|null,
     *     DryRun?: bool|null,
     *     HttpProtocolIpv6?: 'disabled'|'enabled'|null,
     *     InstanceMetadataTags?: 'disabled'|'enabled'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
