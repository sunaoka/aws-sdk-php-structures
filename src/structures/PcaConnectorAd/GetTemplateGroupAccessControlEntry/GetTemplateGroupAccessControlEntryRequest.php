<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplateGroupAccessControlEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupSecurityIdentifier
 * @property string $TemplateArn
 */
class GetTemplateGroupAccessControlEntryRequest extends Request
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
