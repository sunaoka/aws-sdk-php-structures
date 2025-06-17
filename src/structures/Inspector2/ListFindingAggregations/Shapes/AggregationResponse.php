<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountAggregationResponse|null $accountAggregation
 * @property AmiAggregationResponse|null $amiAggregation
 * @property AwsEcrContainerAggregationResponse|null $awsEcrContainerAggregation
 * @property CodeRepositoryAggregationResponse|null $codeRepositoryAggregation
 * @property Ec2InstanceAggregationResponse|null $ec2InstanceAggregation
 * @property FindingTypeAggregationResponse|null $findingTypeAggregation
 * @property ImageLayerAggregationResponse|null $imageLayerAggregation
 * @property LambdaFunctionAggregationResponse|null $lambdaFunctionAggregation
 * @property LambdaLayerAggregationResponse|null $lambdaLayerAggregation
 * @property PackageAggregationResponse|null $packageAggregation
 * @property RepositoryAggregationResponse|null $repositoryAggregation
 * @property TitleAggregationResponse|null $titleAggregation
 */
class AggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountAggregation?: AccountAggregationResponse|null,
     *     amiAggregation?: AmiAggregationResponse|null,
     *     awsEcrContainerAggregation?: AwsEcrContainerAggregationResponse|null,
     *     codeRepositoryAggregation?: CodeRepositoryAggregationResponse|null,
     *     ec2InstanceAggregation?: Ec2InstanceAggregationResponse|null,
     *     findingTypeAggregation?: FindingTypeAggregationResponse|null,
     *     imageLayerAggregation?: ImageLayerAggregationResponse|null,
     *     lambdaFunctionAggregation?: LambdaFunctionAggregationResponse|null,
     *     lambdaLayerAggregation?: LambdaLayerAggregationResponse|null,
     *     packageAggregation?: PackageAggregationResponse|null,
     *     repositoryAggregation?: RepositoryAggregationResponse|null,
     *     titleAggregation?: TitleAggregationResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
