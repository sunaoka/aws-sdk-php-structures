<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplateGroupAccessControlEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccessRights $AccessRights
 * @property string $GroupDisplayName
 * @property string $GroupSecurityIdentifier
 * @property string $TemplateArn
 */
class UpdateTemplateGroupAccessControlEntryRequest extends Request
{
    /**
     * @param array{
     *     AccessRights?: Shapes\AccessRights,
     *     GroupDisplayName?: string,
     *     GroupSecurityIdentifier: string,
     *     TemplateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
