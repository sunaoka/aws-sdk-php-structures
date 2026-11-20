<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\UpdateCampaignAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $CampaignIdentifier
 * @property string $CampaignAssetIdentifier
 * @property list<Shapes\FieldValueInput>|null $FieldValues
 * @property string|null $Layout
 * @property 'ON_ACTIVATION'|'SCHEDULED'|null $SendMode
 * @property \Aws\Api\DateTimeResult|null $ScheduledSendAt
 * @property string|null $ClientToken
 */
class UpdateCampaignAssetRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     CampaignIdentifier: string,
     *     CampaignAssetIdentifier: string,
     *     FieldValues?: list<Shapes\FieldValueInput>|null,
     *     Layout?: string|null,
     *     SendMode?: 'ON_ACTIVATION'|'SCHEDULED'|null,
     *     ScheduledSendAt?: \Aws\Api\DateTimeResult|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
