<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessPointArn
 * @property string|null $Alias
 * @property string|null $Bucket
 * @property string|null $BucketAccountId
 * @property string|null $Name
 * @property string|null $NetworkOrigin
 * @property AwsS3AccountPublicAccessBlockDetails|null $PublicAccessBlockConfiguration
 * @property AwsS3AccessPointVpcConfigurationDetails|null $VpcConfiguration
 */
class AwsS3AccessPointDetails extends Shape
{
    /**
     * @param array{
     *     AccessPointArn?: string|null,
     *     Alias?: string|null,
     *     Bucket?: string|null,
     *     BucketAccountId?: string|null,
     *     Name?: string|null,
     *     NetworkOrigin?: string|null,
     *     PublicAccessBlockConfiguration?: AwsS3AccountPublicAccessBlockDetails|null,
     *     VpcConfiguration?: AwsS3AccessPointVpcConfigurationDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
