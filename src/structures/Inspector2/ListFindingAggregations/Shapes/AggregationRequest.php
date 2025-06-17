<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountAggregation|null $accountAggregation
 * @property AmiAggregation|null $amiAggregation
 * @property AwsEcrContainerAggregation|null $awsEcrContainerAggregation
 * @property CodeRepositoryAggregation|null $codeRepositoryAggregation
 * @property Ec2InstanceAggregation|null $ec2InstanceAggregation
 * @property FindingTypeAggregation|null $findingTypeAggregation
 * @property ImageLayerAggregation|null $imageLayerAggregation
 * @property LambdaFunctionAggregation|null $lambdaFunctionAggregation
 * @property LambdaLayerAggregation|null $lambdaLayerAggregation
 * @property PackageAggregation|null $packageAggregation
 * @property RepositoryAggregation|null $repositoryAggregation
 * @property TitleAggregation|null $titleAggregation
 */
class AggregationRequest extends Shape
{
    /**
     * @param array{
     *     accountAggregation?: AccountAggregation|null,
     *     amiAggregation?: AmiAggregation|null,
     *     awsEcrContainerAggregation?: AwsEcrContainerAggregation|null,
     *     codeRepositoryAggregation?: CodeRepositoryAggregation|null,
     *     ec2InstanceAggregation?: Ec2InstanceAggregation|null,
     *     findingTypeAggregation?: FindingTypeAggregation|null,
     *     imageLayerAggregation?: ImageLayerAggregation|null,
     *     lambdaFunctionAggregation?: LambdaFunctionAggregation|null,
     *     lambdaLayerAggregation?: LambdaLayerAggregation|null,
     *     packageAggregation?: PackageAggregation|null,
     *     repositoryAggregation?: RepositoryAggregation|null,
     *     titleAggregation?: TitleAggregation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
