<?php

namespace Sunaoka\Aws\Structures\Connect\CreateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property 'SAML'|'CONNECT_MANAGED'|'EXISTING_DIRECTORY' $IdentityManagementType
 * @property string $InstanceAlias
 * @property string $DirectoryId
 * @property bool $InboundCallsEnabled
 * @property bool $OutboundCallsEnabled
 * @property array<string, string> $Tags
 */
class CreateInstanceRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     IdentityManagementType: 'SAML'|'CONNECT_MANAGED'|'EXISTING_DIRECTORY',
     *     InstanceAlias?: string,
     *     DirectoryId?: string,
     *     InboundCallsEnabled: bool,
     *     OutboundCallsEnabled: bool,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
