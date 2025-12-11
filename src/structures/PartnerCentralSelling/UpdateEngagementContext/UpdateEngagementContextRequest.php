<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateEngagementContext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $EngagementIdentifier
 * @property string $ContextIdentifier
 * @property \Aws\Api\DateTimeResult $EngagementLastModifiedAt
 * @property 'CustomerProject'|'Lead' $Type
 * @property Shapes\UpdateEngagementContextPayload $Payload
 */
class UpdateEngagementContextRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementIdentifier: string,
     *     ContextIdentifier: string,
     *     EngagementLastModifiedAt: \Aws\Api\DateTimeResult,
     *     Type: 'CustomerProject'|'Lead',
     *     Payload: Shapes\UpdateEngagementContextPayload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
