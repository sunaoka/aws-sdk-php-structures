<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CampaignId
 * @property string $Arn
 * @property string $Name
 * @property 'DRAFT'|'ACTIVE'|'COMPLETED' $State
 * @property string|null $CampaignTemplateId
 * @property 'en'|'es'|'es-419'|'fr'|'de'|'it'|'pt-BR'|'id'|'tr'|'ja'|'ko'|'zh-Hans'|'zh-Hant'|'ar'|null $Language
 * @property PartnerProfileBranding|null $PartnerProfile
 * @property string|null $SenderEmail
 * @property string|null $PrivacyPolicyUrl
 * @property string|null $PartnerAddress
 * @property PartnerBadgeDetail|null $PartnerBadge
 * @property EmailTargetDetail|null $EmailTarget
 * @property list<string>|null $EmailTargetEngagementGroupIds
 * @property array<'FACEBOOK'|'LINKEDIN'|'X', list<string>>|null $SocialConnections
 * @property MonetaryValue|null $EstimatedBudget
 * @property MonetaryValue|null $TotalBudget
 * @property TargetAudience|null $TargetAudience
 * @property string|null $StartOn
 * @property string|null $EndOn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property list<ActivationIssue> $ActivationIssues
 */
class Campaign extends Shape
{
    /**
     * @param array{
     *     CampaignId: string,
     *     Arn: string,
     *     Name: string,
     *     State: 'DRAFT'|'ACTIVE'|'COMPLETED',
     *     CampaignTemplateId?: string|null,
     *     Language?: 'en'|'es'|'es-419'|'fr'|'de'|'it'|'pt-BR'|'id'|'tr'|'ja'|'ko'|'zh-Hans'|'zh-Hant'|'ar'|null,
     *     PartnerProfile?: PartnerProfileBranding|null,
     *     SenderEmail?: string|null,
     *     PrivacyPolicyUrl?: string|null,
     *     PartnerAddress?: string|null,
     *     PartnerBadge?: PartnerBadgeDetail|null,
     *     EmailTarget?: EmailTargetDetail|null,
     *     EmailTargetEngagementGroupIds?: list<string>|null,
     *     SocialConnections?: array<'FACEBOOK'|'LINKEDIN'|'X', list<string>>|null,
     *     EstimatedBudget?: MonetaryValue|null,
     *     TotalBudget?: MonetaryValue|null,
     *     TargetAudience?: TargetAudience|null,
     *     StartOn?: string|null,
     *     EndOn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     ActivationIssues: list<ActivationIssue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
