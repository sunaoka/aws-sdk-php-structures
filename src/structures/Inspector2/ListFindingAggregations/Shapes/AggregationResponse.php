<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountAggregationResponse|null $accountAggregation
 * @property AmiAggregationResponse|null $amiAggregation
 * @property AwsEcrContainerAggregationResponse|null $awsEcrContainerAggregation
 * @property Ec2InstanceAggregationResponse|null $ec2InstanceAggregation
 * @property FindingTypeAggregationResponse|null $findingTypeAggregation
 * @property ImageLayerAggregationResponse|null $imageLayerAggregation
 * @property PackageAggregationResponse|null $packageAggregation
 * @property RepositoryAggregationResponse|null $repositoryAggregation
 * @property TitleAggregationResponse|null $titleAggregation
 * @property LambdaLayerAggregationResponse|null $lambdaLayerAggregation
 * @property LambdaFunctionAggregationResponse|null $lambdaFunctionAggregation
 * @property CodeRepositoryAggregationResponse|null $codeRepositoryAggregation
 */
class AggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountAggregation?: AccountAggregationResponse|null,
     *     amiAggregation?: AmiAggregationResponse|null,
     *     awsEcrContainerAggregation?: AwsEcrContainerAggregationResponse|null,
     *     ec2InstanceAggregation?: Ec2InstanceAggregationResponse|null,
     *     findingTypeAggregation?: FindingTypeAggregationResponse|null,
     *     imageLayerAggregation?: ImageLayerAggregationResponse|null,
     *     packageAggregation?: PackageAggregationResponse|null,
     *     repositoryAggregation?: RepositoryAggregationResponse|null,
     *     titleAggregation?: TitleAggregationResponse|null,
     *     lambdaLayerAggregation?: LambdaLayerAggregationResponse|null,
     *     lambdaFunctionAggregation?: LambdaFunctionAggregationResponse|null,
     *     codeRepositoryAggregation?: CodeRepositoryAggregationResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
