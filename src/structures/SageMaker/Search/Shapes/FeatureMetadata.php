<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureGroupArn
 * @property string $FeatureGroupName
 * @property string $FeatureName
 * @property 'Integral'|'Fractional'|'String' $FeatureType
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $Description
 * @property list<FeatureParameter> $Parameters
 */
class FeatureMetadata extends Shape
{
    /**
     * @param array{
     *     FeatureGroupArn?: string,
     *     FeatureGroupName?: string,
     *     FeatureName?: string,
     *     FeatureType?: 'Integral'|'Fractional'|'String',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Parameters?: list<FeatureParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
