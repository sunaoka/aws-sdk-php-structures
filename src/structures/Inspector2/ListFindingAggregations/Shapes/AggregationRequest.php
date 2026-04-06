<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountAggregation|null $accountAggregation
 * @property AmiAggregation|null $amiAggregation
 * @property AwsEcrContainerAggregation|null $awsEcrContainerAggregation
 * @property Ec2InstanceAggregation|null $ec2InstanceAggregation
 * @property FindingTypeAggregation|null $findingTypeAggregation
 * @property ImageLayerAggregation|null $imageLayerAggregation
 * @property PackageAggregation|null $packageAggregation
 * @property RepositoryAggregation|null $repositoryAggregation
 * @property TitleAggregation|null $titleAggregation
 * @property LambdaLayerAggregation|null $lambdaLayerAggregation
 * @property LambdaFunctionAggregation|null $lambdaFunctionAggregation
 * @property CodeRepositoryAggregation|null $codeRepositoryAggregation
 */
class AggregationRequest extends Shape
{
    /**
     * @param array{
     *     accountAggregation?: AccountAggregation|null,
     *     amiAggregation?: AmiAggregation|null,
     *     awsEcrContainerAggregation?: AwsEcrContainerAggregation|null,
     *     ec2InstanceAggregation?: Ec2InstanceAggregation|null,
     *     findingTypeAggregation?: FindingTypeAggregation|null,
     *     imageLayerAggregation?: ImageLayerAggregation|null,
     *     packageAggregation?: PackageAggregation|null,
     *     repositoryAggregation?: RepositoryAggregation|null,
     *     titleAggregation?: TitleAggregation|null,
     *     lambdaLayerAggregation?: LambdaLayerAggregation|null,
     *     lambdaFunctionAggregation?: LambdaFunctionAggregation|null,
     *     codeRepositoryAggregation?: CodeRepositoryAggregation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
