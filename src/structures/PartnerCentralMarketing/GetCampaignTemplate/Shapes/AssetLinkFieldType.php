<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL'|'LANDING_PAGE'|'SOCIAL_POST'|'BANNER_AD'|'DOCUMENT' $Category
 * @property string|null $LabelFieldId
 */
class AssetLinkFieldType extends Shape
{
    /**
     * @param array{
     *     Category: 'EMAIL'|'LANDING_PAGE'|'SOCIAL_POST'|'BANNER_AD'|'DOCUMENT',
     *     LabelFieldId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
