<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\ListDeploymentConfigurationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $productId
 * @property 'data-as-a-service' $deliveryOptionType
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListDeploymentConfigurationJobsRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     productId: string,
     *     deliveryOptionType: 'data-as-a-service',
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
