<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'Internet'|'VPC' $NetworkOrigin
 * @property VpcConfiguration|null $VpcConfiguration
 * @property string $Bucket
 * @property string|null $AccessPointArn
 * @property string|null $Alias
 * @property string|null $BucketAccountId
 * @property string|null $DataSourceId
 * @property string|null $DataSourceType
 */
class AccessPoint extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     NetworkOrigin: 'Internet'|'VPC',
     *     VpcConfiguration?: VpcConfiguration|null,
     *     Bucket: string,
     *     AccessPointArn?: string|null,
     *     Alias?: string|null,
     *     BucketAccountId?: string|null,
     *     DataSourceId?: string|null,
     *     DataSourceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
