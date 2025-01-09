<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceMetadataDefaults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'optional'|'required'|'no-preference' $HttpTokens
 * @property int $HttpPutResponseHopLimit
 * @property 'disabled'|'enabled'|'no-preference' $HttpEndpoint
 * @property 'disabled'|'enabled'|'no-preference' $InstanceMetadataTags
 * @property bool $DryRun
 */
class ModifyInstanceMetadataDefaultsRequest extends Request
{
    /**
     * @param array{
     *     HttpTokens?: 'optional'|'required'|'no-preference',
     *     HttpPutResponseHopLimit?: int,
     *     HttpEndpoint?: 'disabled'|'enabled'|'no-preference',
     *     InstanceMetadataTags?: 'disabled'|'enabled'|'no-preference',
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
