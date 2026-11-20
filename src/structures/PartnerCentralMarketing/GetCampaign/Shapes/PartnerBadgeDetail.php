<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 * @property \Aws\Api\DateTimeResult $AttachedAt
 */
class PartnerBadgeDetail extends Shape
{
    /**
     * @param array{
     *     Url: string,
     *     AttachedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
