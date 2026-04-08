<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fulfillmentOptionId
 * @property 'AMAZON_MACHINE_IMAGE'|'API'|'CLOUDFORMATION_TEMPLATE'|'CONTAINER'|'HELM'|'EKS_ADD_ON'|'EC2_IMAGE_BUILDER_COMPONENT'|'DATA_EXCHANGE'|'PROFESSIONAL_SERVICES'|'SAAS'|'SAGEMAKER_ALGORITHM'|'SAGEMAKER_MODEL' $fulfillmentOptionType
 * @property string $fulfillmentOptionDisplayName
 * @property string|null $fulfillmentOptionVersion
 * @property string|null $releaseNotes
 * @property string|null $usageInstructions
 * @property SageMakerModelRecommendation|null $recommendation
 */
class SageMakerModelFulfillmentOption extends Shape
{
    /**
     * @param array{
     *     fulfillmentOptionId: string,
     *     fulfillmentOptionType: 'AMAZON_MACHINE_IMAGE'|'API'|'CLOUDFORMATION_TEMPLATE'|'CONTAINER'|'HELM'|'EKS_ADD_ON'|'EC2_IMAGE_BUILDER_COMPONENT'|'DATA_EXCHANGE'|'PROFESSIONAL_SERVICES'|'SAAS'|'SAGEMAKER_ALGORITHM'|'SAGEMAKER_MODEL',
     *     fulfillmentOptionDisplayName: string,
     *     fulfillmentOptionVersion?: string|null,
     *     releaseNotes?: string|null,
     *     usageInstructions?: string|null,
     *     recommendation?: SageMakerModelRecommendation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
