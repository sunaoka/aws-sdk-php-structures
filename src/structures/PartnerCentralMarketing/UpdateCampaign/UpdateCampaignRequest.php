<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\UpdateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $CampaignIdentifier
 * @property string|null $Name
 * @property string|null $SenderEmail
 * @property string|null $PrivacyPolicyUrl
 * @property string|null $PartnerAddress
 * @property Shapes\FileRef|null $PartnerBadge
 * @property Shapes\FileRef|null $EmailTarget
 * @property list<string>|null $EmailTargetEngagementGroupIds
 * @property array<'FACEBOOK'|'LINKEDIN'|'X', list<string>>|null $SocialConnections
 * @property Shapes\MonetaryValue|null $EstimatedBudget
 * @property Shapes\MonetaryValue|null $TotalBudget
 * @property Shapes\TargetAudience|null $TargetAudience
 * @property string|null $ClientToken
 * @property string|null $StartOn
 * @property string|null $EndOn
 */
class UpdateCampaignRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     CampaignIdentifier: string,
     *     Name?: string|null,
     *     SenderEmail?: string|null,
     *     PrivacyPolicyUrl?: string|null,
     *     PartnerAddress?: string|null,
     *     PartnerBadge?: Shapes\FileRef|null,
     *     EmailTarget?: Shapes\FileRef|null,
     *     EmailTargetEngagementGroupIds?: list<string>|null,
     *     SocialConnections?: array<'FACEBOOK'|'LINKEDIN'|'X', list<string>>|null,
     *     EstimatedBudget?: Shapes\MonetaryValue|null,
     *     TotalBudget?: Shapes\MonetaryValue|null,
     *     TargetAudience?: Shapes\TargetAudience|null,
     *     ClientToken?: string|null,
     *     StartOn?: string|null,
     *     EndOn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
