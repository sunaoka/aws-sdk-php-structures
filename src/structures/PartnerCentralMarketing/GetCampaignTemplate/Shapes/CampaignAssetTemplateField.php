<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string|null $Label
 * @property string|null $Description
 * @property 'HEADER'|'BODY'|'FOOTER'|null $Section
 * @property int<1, max>|null $Page
 * @property bool|null $Required
 * @property FieldType $Type
 * @property 'SENDER_EMAIL'|'END_ON'|'EMAIL_TARGET'|'PRIVACY_POLICY_URL'|'PARTNER_ADDRESS'|'PARTNER_BADGE'|null $CampaignSetting
 * @property 'DISPLAY_NAME'|'WEBSITE_URL'|'LOGO'|'WEBSITE_DOMAIN'|'COPYRIGHT_LINE'|'PARTNER_DETAILS'|'COPYRIGHT_AND_DETAILS'|'COPYRIGHT_YEAR_LINE'|null $PartnerProfileField
 */
class CampaignAssetTemplateField extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Label?: string|null,
     *     Description?: string|null,
     *     Section?: 'HEADER'|'BODY'|'FOOTER'|null,
     *     Page?: int<1, max>|null,
     *     Required?: bool|null,
     *     Type: FieldType,
     *     CampaignSetting?: 'SENDER_EMAIL'|'END_ON'|'EMAIL_TARGET'|'PRIVACY_POLICY_URL'|'PARTNER_ADDRESS'|'PARTNER_BADGE'|null,
     *     PartnerProfileField?: 'DISPLAY_NAME'|'WEBSITE_URL'|'LOGO'|'WEBSITE_DOMAIN'|'COPYRIGHT_LINE'|'PARTNER_DETAILS'|'COPYRIGHT_AND_DETAILS'|'COPYRIGHT_YEAR_LINE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
