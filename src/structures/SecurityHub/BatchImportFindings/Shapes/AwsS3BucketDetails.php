<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $OwnerName
 * @property string|null $OwnerAccountId
 * @property string|null $CreatedAt
 * @property AwsS3BucketServerSideEncryptionConfiguration|null $ServerSideEncryptionConfiguration
 * @property AwsS3BucketBucketLifecycleConfigurationDetails|null $BucketLifecycleConfiguration
 * @property AwsS3AccountPublicAccessBlockDetails|null $PublicAccessBlockConfiguration
 * @property string|null $AccessControlList
 * @property AwsS3BucketLoggingConfiguration|null $BucketLoggingConfiguration
 * @property AwsS3BucketWebsiteConfiguration|null $BucketWebsiteConfiguration
 * @property AwsS3BucketNotificationConfiguration|null $BucketNotificationConfiguration
 * @property AwsS3BucketBucketVersioningConfiguration|null $BucketVersioningConfiguration
 * @property AwsS3BucketObjectLockConfiguration|null $ObjectLockConfiguration
 * @property string|null $Name
 */
class AwsS3BucketDetails extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     OwnerName?: string|null,
     *     OwnerAccountId?: string|null,
     *     CreatedAt?: string|null,
     *     ServerSideEncryptionConfiguration?: AwsS3BucketServerSideEncryptionConfiguration|null,
     *     BucketLifecycleConfiguration?: AwsS3BucketBucketLifecycleConfigurationDetails|null,
     *     PublicAccessBlockConfiguration?: AwsS3AccountPublicAccessBlockDetails|null,
     *     AccessControlList?: string|null,
     *     BucketLoggingConfiguration?: AwsS3BucketLoggingConfiguration|null,
     *     BucketWebsiteConfiguration?: AwsS3BucketWebsiteConfiguration|null,
     *     BucketNotificationConfiguration?: AwsS3BucketNotificationConfiguration|null,
     *     BucketVersioningConfiguration?: AwsS3BucketBucketVersioningConfiguration|null,
     *     ObjectLockConfiguration?: AwsS3BucketObjectLockConfiguration|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
