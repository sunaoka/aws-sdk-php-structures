<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceMetadataDefaults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'optional'|'required'|'no-preference'|null $HttpTokens
 * @property int|null $HttpPutResponseHopLimit
 * @property 'disabled'|'enabled'|'no-preference'|null $HttpEndpoint
 * @property 'disabled'|'enabled'|'no-preference'|null $InstanceMetadataTags
 * @property bool|null $DryRun
 */
class ModifyInstanceMetadataDefaultsRequest extends Request
{
    /**
     * @param array{
     *     HttpTokens?: 'optional'|'required'|'no-preference'|null,
     *     HttpPutResponseHopLimit?: int|null,
     *     HttpEndpoint?: 'disabled'|'enabled'|'no-preference'|null,
     *     InstanceMetadataTags?: 'disabled'|'enabled'|'no-preference'|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
