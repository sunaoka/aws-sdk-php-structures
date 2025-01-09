<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $CompanyName
 * @property string $WebsiteUrl
 */
class EngagementMember extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     CompanyName?: string,
     *     WebsiteUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
