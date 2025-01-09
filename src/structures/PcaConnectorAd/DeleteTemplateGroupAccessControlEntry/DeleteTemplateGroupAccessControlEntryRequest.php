<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\DeleteTemplateGroupAccessControlEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupSecurityIdentifier
 * @property string $TemplateArn
 */
class DeleteTemplateGroupAccessControlEntryRequest extends Request
{
    /**
     * @param array{
     *     GroupSecurityIdentifier: string,
     *     TemplateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
