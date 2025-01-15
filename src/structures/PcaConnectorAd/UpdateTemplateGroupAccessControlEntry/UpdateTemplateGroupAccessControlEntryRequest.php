<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplateGroupAccessControlEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccessRights|null $AccessRights
 * @property string|null $GroupDisplayName
 * @property string $GroupSecurityIdentifier
 * @property string $TemplateArn
 */
class UpdateTemplateGroupAccessControlEntryRequest extends Request
{
    /**
     * @param array{
     *     AccessRights?: Shapes\AccessRights|null,
     *     GroupDisplayName?: string|null,
     *     GroupSecurityIdentifier: string,
     *     TemplateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
