<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CompanyName
 * @property string $WebsiteUrl
 */
class EngagementMemberSummary extends Shape
{
    /**
     * @param array{
     *     CompanyName?: string,
     *     WebsiteUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
