<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountAggregation $accountAggregation
 * @property AmiAggregation $amiAggregation
 * @property AwsEcrContainerAggregation $awsEcrContainerAggregation
 * @property Ec2InstanceAggregation $ec2InstanceAggregation
 * @property FindingTypeAggregation $findingTypeAggregation
 * @property ImageLayerAggregation $imageLayerAggregation
 * @property LambdaFunctionAggregation $lambdaFunctionAggregation
 * @property LambdaLayerAggregation $lambdaLayerAggregation
 * @property PackageAggregation $packageAggregation
 * @property RepositoryAggregation $repositoryAggregation
 * @property TitleAggregation $titleAggregation
 */
class AggregationRequest extends Shape
{
    /**
     * @param array{
     *     accountAggregation?: AccountAggregation,
     *     amiAggregation?: AmiAggregation,
     *     awsEcrContainerAggregation?: AwsEcrContainerAggregation,
     *     ec2InstanceAggregation?: Ec2InstanceAggregation,
     *     findingTypeAggregation?: FindingTypeAggregation,
     *     imageLayerAggregation?: ImageLayerAggregation,
     *     lambdaFunctionAggregation?: LambdaFunctionAggregation,
     *     lambdaLayerAggregation?: LambdaLayerAggregation,
     *     packageAggregation?: PackageAggregation,
     *     repositoryAggregation?: RepositoryAggregation,
     *     titleAggregation?: TitleAggregation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
