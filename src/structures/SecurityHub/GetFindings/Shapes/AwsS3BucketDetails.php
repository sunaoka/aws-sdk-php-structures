<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $OwnerName
 * @property string $OwnerAccountId
 * @property string $CreatedAt
 * @property AwsS3BucketServerSideEncryptionConfiguration $ServerSideEncryptionConfiguration
 * @property AwsS3BucketBucketLifecycleConfigurationDetails $BucketLifecycleConfiguration
 * @property AwsS3AccountPublicAccessBlockDetails $PublicAccessBlockConfiguration
 * @property string $AccessControlList
 * @property AwsS3BucketLoggingConfiguration $BucketLoggingConfiguration
 * @property AwsS3BucketWebsiteConfiguration $BucketWebsiteConfiguration
 * @property AwsS3BucketNotificationConfiguration $BucketNotificationConfiguration
 * @property AwsS3BucketBucketVersioningConfiguration $BucketVersioningConfiguration
 * @property AwsS3BucketObjectLockConfiguration $ObjectLockConfiguration
 * @property string $Name
 */
class AwsS3BucketDetails extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     OwnerName?: string,
     *     OwnerAccountId?: string,
     *     CreatedAt?: string,
     *     ServerSideEncryptionConfiguration?: AwsS3BucketServerSideEncryptionConfiguration,
     *     BucketLifecycleConfiguration?: AwsS3BucketBucketLifecycleConfigurationDetails,
     *     PublicAccessBlockConfiguration?: AwsS3AccountPublicAccessBlockDetails,
     *     AccessControlList?: string,
     *     BucketLoggingConfiguration?: AwsS3BucketLoggingConfiguration,
     *     BucketWebsiteConfiguration?: AwsS3BucketWebsiteConfiguration,
     *     BucketNotificationConfiguration?: AwsS3BucketNotificationConfiguration,
     *     BucketVersioningConfiguration?: AwsS3BucketBucketVersioningConfiguration,
     *     ObjectLockConfiguration?: AwsS3BucketObjectLockConfiguration,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
