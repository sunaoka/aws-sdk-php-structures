<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\GetDeploymentConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $productId
 * @property 'data-as-a-service' $deliveryOptionType
 */
class GetDeploymentConfigurationRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     productId: string,
     *     deliveryOptionType: 'data-as-a-service'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
