<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CancelConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property 'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY' $ConnectionType
 * @property string $Reason
 * @property string $ClientToken
 */
class CancelConnectionRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     ConnectionType: 'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY',
     *     Reason: string,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
