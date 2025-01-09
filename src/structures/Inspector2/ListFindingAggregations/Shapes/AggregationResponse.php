<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountAggregationResponse $accountAggregation
 * @property AmiAggregationResponse $amiAggregation
 * @property AwsEcrContainerAggregationResponse $awsEcrContainerAggregation
 * @property Ec2InstanceAggregationResponse $ec2InstanceAggregation
 * @property FindingTypeAggregationResponse $findingTypeAggregation
 * @property ImageLayerAggregationResponse $imageLayerAggregation
 * @property LambdaFunctionAggregationResponse $lambdaFunctionAggregation
 * @property LambdaLayerAggregationResponse $lambdaLayerAggregation
 * @property PackageAggregationResponse $packageAggregation
 * @property RepositoryAggregationResponse $repositoryAggregation
 * @property TitleAggregationResponse $titleAggregation
 */
class AggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountAggregation?: AccountAggregationResponse,
     *     amiAggregation?: AmiAggregationResponse,
     *     awsEcrContainerAggregation?: AwsEcrContainerAggregationResponse,
     *     ec2InstanceAggregation?: Ec2InstanceAggregationResponse,
     *     findingTypeAggregation?: FindingTypeAggregationResponse,
     *     imageLayerAggregation?: ImageLayerAggregationResponse,
     *     lambdaFunctionAggregation?: LambdaFunctionAggregationResponse,
     *     lambdaLayerAggregation?: LambdaLayerAggregationResponse,
     *     packageAggregation?: PackageAggregationResponse,
     *     repositoryAggregation?: RepositoryAggregationResponse,
     *     titleAggregation?: TitleAggregationResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
