<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fulfillmentOptionId
 * @property string $fulfillmentOptionName
 * @property string|null $fulfillmentOptionVersion
 * @property 'AMAZON_MACHINE_IMAGE'|'API'|'CLOUDFORMATION_TEMPLATE'|'CONTAINER'|'HELM'|'EKS_ADD_ON'|'EC2_IMAGE_BUILDER_COMPONENT'|'DATA_EXCHANGE'|'PROFESSIONAL_SERVICES'|'SAAS'|'SAGEMAKER_ALGORITHM'|'SAGEMAKER_MODEL' $fulfillmentOptionType
 * @property string $fulfillmentOptionDisplayName
 * @property list<AmazonMachineImageOperatingSystem> $operatingSystems
 * @property AmazonMachineImageRecommendation|null $recommendation
 * @property string|null $releaseNotes
 * @property string|null $usageInstructions
 * @property \Aws\Api\DateTimeResult|null $availableFromTime
 * @property string|null $accessUrlTemplate
 * @property string $architecture
 * @property string|null $amiAlias
 * @property AmazonMachineImageEbsVolume|null $ebsVolume
 * @property string|null $shortDescription
 */
class AmazonMachineImageFulfillmentOption extends Shape
{
    /**
     * @param array{
     *     fulfillmentOptionId: string,
     *     fulfillmentOptionName: string,
     *     fulfillmentOptionVersion?: string|null,
     *     fulfillmentOptionType: 'AMAZON_MACHINE_IMAGE'|'API'|'CLOUDFORMATION_TEMPLATE'|'CONTAINER'|'HELM'|'EKS_ADD_ON'|'EC2_IMAGE_BUILDER_COMPONENT'|'DATA_EXCHANGE'|'PROFESSIONAL_SERVICES'|'SAAS'|'SAGEMAKER_ALGORITHM'|'SAGEMAKER_MODEL',
     *     fulfillmentOptionDisplayName: string,
     *     operatingSystems: list<AmazonMachineImageOperatingSystem>,
     *     recommendation?: AmazonMachineImageRecommendation|null,
     *     releaseNotes?: string|null,
     *     usageInstructions?: string|null,
     *     availableFromTime?: \Aws\Api\DateTimeResult|null,
     *     accessUrlTemplate?: string|null,
     *     architecture: string,
     *     amiAlias?: string|null,
     *     ebsVolume?: AmazonMachineImageEbsVolume|null,
     *     shortDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
