<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementContext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $EngagementIdentifier
 * @property string $ClientToken
 * @property 'CustomerProject'|'Lead' $Type
 * @property Shapes\EngagementContextPayload $Payload
 */
class CreateEngagementContextRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementIdentifier: string,
     *     ClientToken: string,
     *     Type: 'CustomerProject'|'Lead',
     *     Payload: Shapes\EngagementContextPayload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
