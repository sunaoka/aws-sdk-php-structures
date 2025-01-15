<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CompanyName
 * @property string|null $WebsiteUrl
 */
class EngagementMemberSummary extends Shape
{
    /**
     * @param array{
     *     CompanyName?: string|null,
     *     WebsiteUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
