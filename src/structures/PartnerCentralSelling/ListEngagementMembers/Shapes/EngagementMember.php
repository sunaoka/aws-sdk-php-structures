<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CompanyName
 * @property string|null $WebsiteUrl
 * @property string|null $AccountId
 */
class EngagementMember extends Shape
{
    /**
     * @param array{
     *     CompanyName?: string|null,
     *     WebsiteUrl?: string|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
