<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessPointArn
 * @property string $Alias
 * @property string $Bucket
 * @property string $BucketAccountId
 * @property string $Name
 * @property string $NetworkOrigin
 * @property AwsS3AccountPublicAccessBlockDetails $PublicAccessBlockConfiguration
 * @property AwsS3AccessPointVpcConfigurationDetails $VpcConfiguration
 */
class AwsS3AccessPointDetails extends Shape
{
    /**
     * @param array{
     *     AccessPointArn?: string,
     *     Alias?: string,
     *     Bucket?: string,
     *     BucketAccountId?: string,
     *     Name?: string,
     *     NetworkOrigin?: string,
     *     PublicAccessBlockConfiguration?: AwsS3AccountPublicAccessBlockDetails,
     *     VpcConfiguration?: AwsS3AccessPointVpcConfigurationDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
