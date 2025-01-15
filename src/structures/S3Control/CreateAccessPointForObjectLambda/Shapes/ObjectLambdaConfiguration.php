<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessPointForObjectLambda\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SupportingAccessPoint
 * @property bool|null $CloudWatchMetricsEnabled
 * @property list<'GetObject-Range'|'GetObject-PartNumber'|'HeadObject-Range'|'HeadObject-PartNumber'>|null $AllowedFeatures
 * @property list<ObjectLambdaTransformationConfiguration> $TransformationConfigurations
 */
class ObjectLambdaConfiguration extends Shape
{
    /**
     * @param array{
     *     SupportingAccessPoint: string,
     *     CloudWatchMetricsEnabled?: bool|null,
     *     AllowedFeatures?: list<'GetObject-Range'|'GetObject-PartNumber'|'HeadObject-Range'|'HeadObject-PartNumber'>|null,
     *     TransformationConfigurations: list<ObjectLambdaTransformationConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
