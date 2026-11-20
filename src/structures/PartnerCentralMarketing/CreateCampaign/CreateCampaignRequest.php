<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\CreateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $Name
 * @property string $CampaignTemplateId
 * @property string|null $SenderEmail
 * @property string|null $PrivacyPolicyUrl
 * @property string|null $PartnerAddress
 * @property Shapes\FileRef|null $PartnerBadge
 * @property Shapes\FileRef|null $EmailTarget
 * @property list<string>|null $EmailTargetEngagementGroupIds
 * @property Shapes\TargetAudience|null $TargetAudience
 * @property Shapes\MonetaryValue|null $EstimatedBudget
 * @property Shapes\MonetaryValue|null $TotalBudget
 * @property string|null $StartOn
 * @property string|null $EndOn
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateCampaignRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     Name: string,
     *     CampaignTemplateId: string,
     *     SenderEmail?: string|null,
     *     PrivacyPolicyUrl?: string|null,
     *     PartnerAddress?: string|null,
     *     PartnerBadge?: Shapes\FileRef|null,
     *     EmailTarget?: Shapes\FileRef|null,
     *     EmailTargetEngagementGroupIds?: list<string>|null,
     *     TargetAudience?: Shapes\TargetAudience|null,
     *     EstimatedBudget?: Shapes\MonetaryValue|null,
     *     TotalBudget?: Shapes\MonetaryValue|null,
     *     StartOn?: string|null,
     *     EndOn?: string|null,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
