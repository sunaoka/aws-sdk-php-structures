<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\ListSocialConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'FACEBOOK'|'LINKEDIN'|'X' $Platform
 * @property 'AUTHORIZED'|'EXPIRED'|'PAGE_REQUIRED' $Status
 * @property string|null $PageName
 * @property string|null $AccountName
 * @property \Aws\Api\DateTimeResult|null $ConnectedAt
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 */
class SocialConnectionSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Platform: 'FACEBOOK'|'LINKEDIN'|'X',
     *     Status: 'AUTHORIZED'|'EXPIRED'|'PAGE_REQUIRED',
     *     PageName?: string|null,
     *     AccountName?: string|null,
     *     ConnectedAt?: \Aws\Api\DateTimeResult|null,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
