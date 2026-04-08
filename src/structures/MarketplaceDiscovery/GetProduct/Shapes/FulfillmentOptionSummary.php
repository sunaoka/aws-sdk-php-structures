<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AMAZON_MACHINE_IMAGE'|'API'|'CLOUDFORMATION_TEMPLATE'|'CONTAINER'|'HELM'|'EKS_ADD_ON'|'EC2_IMAGE_BUILDER_COMPONENT'|'DATA_EXCHANGE'|'PROFESSIONAL_SERVICES'|'SAAS'|'SAGEMAKER_ALGORITHM'|'SAGEMAKER_MODEL' $fulfillmentOptionType
 * @property string $displayName
 */
class FulfillmentOptionSummary extends Shape
{
    /**
     * @param array{
     *     fulfillmentOptionType: 'AMAZON_MACHINE_IMAGE'|'API'|'CLOUDFORMATION_TEMPLATE'|'CONTAINER'|'HELM'|'EKS_ADD_ON'|'EC2_IMAGE_BUILDER_COMPONENT'|'DATA_EXCHANGE'|'PROFESSIONAL_SERVICES'|'SAAS'|'SAGEMAKER_ALGORITHM'|'SAGEMAKER_MODEL',
     *     displayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
