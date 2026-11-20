<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\ListCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CampaignId
 * @property string $Arn
 * @property string $Name
 * @property 'DRAFT'|'ACTIVE'|'COMPLETED' $State
 * @property 'en'|'es'|'es-419'|'fr'|'de'|'it'|'pt-BR'|'id'|'tr'|'ja'|'ko'|'zh-Hans'|'zh-Hant'|'ar'|null $Language
 * @property string|null $StartOn
 * @property string|null $EndOn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class CampaignSummary extends Shape
{
    /**
     * @param array{
     *     CampaignId: string,
     *     Arn: string,
     *     Name: string,
     *     State: 'DRAFT'|'ACTIVE'|'COMPLETED',
     *     Language?: 'en'|'es'|'es-419'|'fr'|'de'|'it'|'pt-BR'|'id'|'tr'|'ja'|'ko'|'zh-Hans'|'zh-Hant'|'ar'|null,
     *     StartOn?: string|null,
     *     EndOn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
