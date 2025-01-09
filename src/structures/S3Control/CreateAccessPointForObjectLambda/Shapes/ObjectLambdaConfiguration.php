<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessPointForObjectLambda\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SupportingAccessPoint
 * @property bool $CloudWatchMetricsEnabled
 * @property list<'GetObject-Range'|'GetObject-PartNumber'|'HeadObject-Range'|'HeadObject-PartNumber'> $AllowedFeatures
 * @property list<ObjectLambdaTransformationConfiguration> $TransformationConfigurations
 */
class ObjectLambdaConfiguration extends Shape
{
    /**
     * @param array{
     *     SupportingAccessPoint: string,
     *     CloudWatchMetricsEnabled?: bool,
     *     AllowedFeatures?: list<'GetObject-Range'|'GetObject-PartNumber'|'HeadObject-Range'|'HeadObject-PartNumber'>,
     *     TransformationConfigurations: list<ObjectLambdaTransformationConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
