<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsS3BucketBucketLifecycleConfigurationRulesAbortIncompleteMultipartUploadDetails|null $AbortIncompleteMultipartUpload
 * @property string|null $ExpirationDate
 * @property int|null $ExpirationInDays
 * @property bool|null $ExpiredObjectDeleteMarker
 * @property AwsS3BucketBucketLifecycleConfigurationRulesFilterDetails|null $Filter
 * @property string|null $ID
 * @property int|null $NoncurrentVersionExpirationInDays
 * @property list<AwsS3BucketBucketLifecycleConfigurationRulesNoncurrentVersionTransitionsDetails>|null $NoncurrentVersionTransitions
 * @property string|null $Prefix
 * @property string|null $Status
 * @property list<AwsS3BucketBucketLifecycleConfigurationRulesTransitionsDetails>|null $Transitions
 */
class AwsS3BucketBucketLifecycleConfigurationRulesDetails extends Shape
{
    /**
     * @param array{
     *     AbortIncompleteMultipartUpload?: AwsS3BucketBucketLifecycleConfigurationRulesAbortIncompleteMultipartUploadDetails|null,
     *     ExpirationDate?: string|null,
     *     ExpirationInDays?: int|null,
     *     ExpiredObjectDeleteMarker?: bool|null,
     *     Filter?: AwsS3BucketBucketLifecycleConfigurationRulesFilterDetails|null,
     *     ID?: string|null,
     *     NoncurrentVersionExpirationInDays?: int|null,
     *     NoncurrentVersionTransitions?: list<AwsS3BucketBucketLifecycleConfigurationRulesNoncurrentVersionTransitionsDetails>|null,
     *     Prefix?: string|null,
     *     Status?: string|null,
     *     Transitions?: list<AwsS3BucketBucketLifecycleConfigurationRulesTransitionsDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
