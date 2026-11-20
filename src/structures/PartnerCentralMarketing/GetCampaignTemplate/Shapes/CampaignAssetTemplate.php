<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'EMAIL'|'SOCIAL_POST'|'LANDING_PAGE'|'BANNER_AD'|'DOCUMENT' $Type
 * @property string $Label
 * @property int|null $DisplayOrder
 * @property list<CampaignAssetTemplateField>|null $Fields
 * @property list<LayoutPreview>|null $LayoutPreviews
 * @property list<string>|null $PrerequisiteAssetTemplateIds
 * @property 'FACEBOOK'|'LINKEDIN'|'X'|null $SocialPlatform
 */
class CampaignAssetTemplate extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Type: 'EMAIL'|'SOCIAL_POST'|'LANDING_PAGE'|'BANNER_AD'|'DOCUMENT',
     *     Label: string,
     *     DisplayOrder?: int|null,
     *     Fields?: list<CampaignAssetTemplateField>|null,
     *     LayoutPreviews?: list<LayoutPreview>|null,
     *     PrerequisiteAssetTemplateIds?: list<string>|null,
     *     SocialPlatform?: 'FACEBOOK'|'LINKEDIN'|'X'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
