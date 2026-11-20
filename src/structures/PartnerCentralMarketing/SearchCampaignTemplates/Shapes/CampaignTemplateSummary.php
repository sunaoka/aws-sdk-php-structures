<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\SearchCampaignTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property 'FINANCIAL_SERVICES'|'HEALTHCARE'|'MANUFACTURING'|'RETAIL'|'MEDIA_ENTERTAINMENT'|'ENERGY'|'EDUCATION'|'GOVERNMENT'|'TELECOMMUNICATIONS'|'AUTOMOTIVE'|'INSURANCE'|'OTHER'|null $Industry
 * @property string|null $UseCase
 * @property string|null $Description
 * @property 'en'|'es'|'es-419'|'fr'|'de'|'it'|'pt-BR'|'id'|'tr'|'ja'|'ko'|'zh-Hans'|'zh-Hant'|'ar'|null $LanguageCode
 * @property 'GENERAL'|'BUILD_WITH_AI' $Collection
 * @property list<string>|null $AwsServices
 * @property list<'ENTERPRISE'|'SMB'|'PUBLIC_SECTOR'|'ISV'>|null $CustomerSegments
 * @property list<'AI'|'MIGRATION_MODERNIZATION'|'SECURITY'|'DATA_ANALYTICS'|'AWS_TRAINING_CERTIFICATION'|'AWS_MARKETPLACE'|'CONNECT'|'EVENTS'>|null $Themes
 * @property string|null $ThumbnailUrl
 */
class CampaignTemplateSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     Industry?: 'FINANCIAL_SERVICES'|'HEALTHCARE'|'MANUFACTURING'|'RETAIL'|'MEDIA_ENTERTAINMENT'|'ENERGY'|'EDUCATION'|'GOVERNMENT'|'TELECOMMUNICATIONS'|'AUTOMOTIVE'|'INSURANCE'|'OTHER'|null,
     *     UseCase?: string|null,
     *     Description?: string|null,
     *     LanguageCode?: 'en'|'es'|'es-419'|'fr'|'de'|'it'|'pt-BR'|'id'|'tr'|'ja'|'ko'|'zh-Hans'|'zh-Hant'|'ar'|null,
     *     Collection: 'GENERAL'|'BUILD_WITH_AI',
     *     AwsServices?: list<string>|null,
     *     CustomerSegments?: list<'ENTERPRISE'|'SMB'|'PUBLIC_SECTOR'|'ISV'>|null,
     *     Themes?: list<'AI'|'MIGRATION_MODERNIZATION'|'SECURITY'|'DATA_ANALYTICS'|'AWS_TRAINING_CERTIFICATION'|'AWS_MARKETPLACE'|'CONNECT'|'EVENTS'>|null,
     *     ThumbnailUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
