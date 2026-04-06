<?php

namespace Sunaoka\Aws\Structures\Connect\CreateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property 'SAML'|'CONNECT_MANAGED'|'EXISTING_DIRECTORY' $IdentityManagementType
 * @property string|null $InstanceAlias
 * @property string|null $DirectoryId
 * @property bool $InboundCallsEnabled
 * @property bool $OutboundCallsEnabled
 */
class CreateInstanceRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     IdentityManagementType: 'SAML'|'CONNECT_MANAGED'|'EXISTING_DIRECTORY',
     *     InstanceAlias?: string|null,
     *     DirectoryId?: string|null,
     *     InboundCallsEnabled: bool,
     *     OutboundCallsEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
