<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateTemplateGroupAccessControlEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccessRights $AccessRights
 * @property string|null $ClientToken
 * @property string $GroupDisplayName
 * @property string $GroupSecurityIdentifier
 * @property string $TemplateArn
 */
class CreateTemplateGroupAccessControlEntryRequest extends Request
{
    /**
     * @param array{
     *     AccessRights: Shapes\AccessRights,
     *     ClientToken?: string|null,
     *     GroupDisplayName: string,
     *     GroupSecurityIdentifier: string,
     *     TemplateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
