<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fulfillmentOptionId
 * @property 'AMAZON_MACHINE_IMAGE'|'API'|'CLOUDFORMATION_TEMPLATE'|'CONTAINER'|'HELM'|'EKS_ADD_ON'|'EC2_IMAGE_BUILDER_COMPONENT'|'DATA_EXCHANGE'|'PROFESSIONAL_SERVICES'|'SAAS'|'SAGEMAKER_ALGORITHM'|'SAGEMAKER_MODEL' $fulfillmentOptionType
 * @property string $fulfillmentOptionDisplayName
 * @property string|null $fulfillmentUrl
 * @property string|null $usageInstructions
 */
class SaasFulfillmentOption extends Shape
{
    /**
     * @param array{
     *     fulfillmentOptionId: string,
     *     fulfillmentOptionType: 'AMAZON_MACHINE_IMAGE'|'API'|'CLOUDFORMATION_TEMPLATE'|'CONTAINER'|'HELM'|'EKS_ADD_ON'|'EC2_IMAGE_BUILDER_COMPONENT'|'DATA_EXCHANGE'|'PROFESSIONAL_SERVICES'|'SAAS'|'SAGEMAKER_ALGORITHM'|'SAGEMAKER_MODEL',
     *     fulfillmentOptionDisplayName: string,
     *     fulfillmentUrl?: string|null,
     *     usageInstructions?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
