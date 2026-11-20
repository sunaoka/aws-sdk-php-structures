<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\GetDeploymentConfigurationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $productId
 * @property 'data-as-a-service' $deliveryOptionType
 * @property string $jobId
 */
class GetDeploymentConfigurationJobRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     productId: string,
     *     deliveryOptionType: 'data-as-a-service',
     *     jobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
