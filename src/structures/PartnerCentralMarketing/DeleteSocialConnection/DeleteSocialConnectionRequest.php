<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\DeleteSocialConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $Identifier
 * @property string|null $ClientToken
 */
class DeleteSocialConnectionRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     Identifier: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
