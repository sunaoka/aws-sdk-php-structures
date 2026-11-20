<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\StartDeploymentConfigurationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $productId
 * @property 'data-as-a-service' $deliveryOptionType
 * @property Shapes\DeploymentConfigurationDetail $configuration
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class StartDeploymentConfigurationJobRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     productId: string,
     *     deliveryOptionType: 'data-as-a-service',
     *     configuration: Shapes\DeploymentConfigurationDetail,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
