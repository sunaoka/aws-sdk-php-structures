<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\SearchCampaignTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string|null $SearchText
 * @property list<'FINANCIAL_SERVICES'|'HEALTHCARE'|'MANUFACTURING'|'RETAIL'|'MEDIA_ENTERTAINMENT'|'ENERGY'|'EDUCATION'|'GOVERNMENT'|'TELECOMMUNICATIONS'|'AUTOMOTIVE'|'INSURANCE'|'OTHER'>|null $Industry
 * @property list<string>|null $UseCase
 * @property list<'en'|'es'|'es-419'|'fr'|'de'|'it'|'pt-BR'|'id'|'tr'|'ja'|'ko'|'zh-Hans'|'zh-Hant'|'ar'>|null $Language
 * @property list<string>|null $AwsServices
 * @property list<'ENTERPRISE'|'SMB'|'PUBLIC_SECTOR'|'ISV'>|null $CustomerSegments
 * @property list<'AI'|'MIGRATION_MODERNIZATION'|'SECURITY'|'DATA_ANALYTICS'|'AWS_TRAINING_CERTIFICATION'|'AWS_MARKETPLACE'|'CONNECT'|'EVENTS'>|null $Themes
 * @property list<'GENERAL'|'BUILD_WITH_AI'>|null $Collection
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class SearchCampaignTemplatesRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     SearchText?: string|null,
     *     Industry?: list<'FINANCIAL_SERVICES'|'HEALTHCARE'|'MANUFACTURING'|'RETAIL'|'MEDIA_ENTERTAINMENT'|'ENERGY'|'EDUCATION'|'GOVERNMENT'|'TELECOMMUNICATIONS'|'AUTOMOTIVE'|'INSURANCE'|'OTHER'>|null,
     *     UseCase?: list<string>|null,
     *     Language?: list<'en'|'es'|'es-419'|'fr'|'de'|'it'|'pt-BR'|'id'|'tr'|'ja'|'ko'|'zh-Hans'|'zh-Hant'|'ar'>|null,
     *     AwsServices?: list<string>|null,
     *     CustomerSegments?: list<'ENTERPRISE'|'SMB'|'PUBLIC_SECTOR'|'ISV'>|null,
     *     Themes?: list<'AI'|'MIGRATION_MODERNIZATION'|'SECURITY'|'DATA_ANALYTICS'|'AWS_TRAINING_CERTIFICATION'|'AWS_MARKETPLACE'|'CONNECT'|'EVENTS'>|null,
     *     Collection?: list<'GENERAL'|'BUILD_WITH_AI'>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
