<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DisplayName
 * @property string|null $WebsiteUrl
 * @property string|null $LogoUrl
 * @property \Aws\Api\DateTimeResult $RefreshedAt
 */
class PartnerProfileBranding extends Shape
{
    /**
     * @param array{
     *     DisplayName?: string|null,
     *     WebsiteUrl?: string|null,
     *     LogoUrl?: string|null,
     *     RefreshedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
