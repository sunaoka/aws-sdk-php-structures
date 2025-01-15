<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FeatureGroupArn
 * @property string|null $FeatureGroupName
 * @property string|null $FeatureName
 * @property 'Integral'|'Fractional'|'String'|null $FeatureType
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $Description
 * @property list<FeatureParameter>|null $Parameters
 */
class FeatureMetadata extends Shape
{
    /**
     * @param array{
     *     FeatureGroupArn?: string|null,
     *     FeatureGroupName?: string|null,
     *     FeatureName?: string|null,
     *     FeatureType?: 'Integral'|'Fractional'|'String'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Parameters?: list<FeatureParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
