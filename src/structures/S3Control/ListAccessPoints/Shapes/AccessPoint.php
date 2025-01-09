<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'Internet'|'VPC' $NetworkOrigin
 * @property VpcConfiguration $VpcConfiguration
 * @property string $Bucket
 * @property string $AccessPointArn
 * @property string $Alias
 * @property string $BucketAccountId
 */
class AccessPoint extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     NetworkOrigin: 'Internet'|'VPC',
     *     VpcConfiguration?: VpcConfiguration,
     *     Bucket: string,
     *     AccessPointArn?: string,
     *     Alias?: string,
     *     BucketAccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
