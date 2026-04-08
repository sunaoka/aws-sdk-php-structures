<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonMachineImageFulfillmentOption|null $amazonMachineImageFulfillmentOption
 * @property ApiFulfillmentOption|null $apiFulfillmentOption
 * @property CloudFormationFulfillmentOption|null $cloudFormationFulfillmentOption
 * @property ContainerFulfillmentOption|null $containerFulfillmentOption
 * @property HelmFulfillmentOption|null $helmFulfillmentOption
 * @property EksAddOnFulfillmentOption|null $eksAddOnFulfillmentOption
 * @property Ec2ImageBuilderComponentFulfillmentOption|null $ec2ImageBuilderComponentFulfillmentOption
 * @property DataExchangeFulfillmentOption|null $dataExchangeFulfillmentOption
 * @property ProfessionalServicesFulfillmentOption|null $professionalServicesFulfillmentOption
 * @property SaasFulfillmentOption|null $saasFulfillmentOption
 * @property SageMakerAlgorithmFulfillmentOption|null $sageMakerAlgorithmFulfillmentOption
 * @property SageMakerModelFulfillmentOption|null $sageMakerModelFulfillmentOption
 */
class FulfillmentOption extends Shape
{
    /**
     * @param array{
     *     amazonMachineImageFulfillmentOption?: AmazonMachineImageFulfillmentOption|null,
     *     apiFulfillmentOption?: ApiFulfillmentOption|null,
     *     cloudFormationFulfillmentOption?: CloudFormationFulfillmentOption|null,
     *     containerFulfillmentOption?: ContainerFulfillmentOption|null,
     *     helmFulfillmentOption?: HelmFulfillmentOption|null,
     *     eksAddOnFulfillmentOption?: EksAddOnFulfillmentOption|null,
     *     ec2ImageBuilderComponentFulfillmentOption?: Ec2ImageBuilderComponentFulfillmentOption|null,
     *     dataExchangeFulfillmentOption?: DataExchangeFulfillmentOption|null,
     *     professionalServicesFulfillmentOption?: ProfessionalServicesFulfillmentOption|null,
     *     saasFulfillmentOption?: SaasFulfillmentOption|null,
     *     sageMakerAlgorithmFulfillmentOption?: SageMakerAlgorithmFulfillmentOption|null,
     *     sageMakerModelFulfillmentOption?: SageMakerModelFulfillmentOption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
