<?php

namespace Sunaoka\Aws\Structures\MarketplaceReporting\GetBuyerDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dashboardIdentifier
 * @property list<string> $embeddingDomains
 */
class GetBuyerDashboardRequest extends Request
{
    /**
     * @param array{
     *     dashboardIdentifier: string,
     *     embeddingDomains: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
