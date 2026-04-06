<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $CompanyName
 * @property string|null $WebsiteUrl
 */
class EngagementMember extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     CompanyName?: string|null,
     *     WebsiteUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
