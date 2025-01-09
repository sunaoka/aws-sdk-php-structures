<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsS3BucketBucketLifecycleConfigurationRulesAbortIncompleteMultipartUploadDetails $AbortIncompleteMultipartUpload
 * @property string $ExpirationDate
 * @property int $ExpirationInDays
 * @property bool $ExpiredObjectDeleteMarker
 * @property AwsS3BucketBucketLifecycleConfigurationRulesFilterDetails $Filter
 * @property string $ID
 * @property int $NoncurrentVersionExpirationInDays
 * @property list<AwsS3BucketBucketLifecycleConfigurationRulesNoncurrentVersionTransitionsDetails> $NoncurrentVersionTransitions
 * @property string $Prefix
 * @property string $Status
 * @property list<AwsS3BucketBucketLifecycleConfigurationRulesTransitionsDetails> $Transitions
 */
class AwsS3BucketBucketLifecycleConfigurationRulesDetails extends Shape
{
    /**
     * @param array{
     *     AbortIncompleteMultipartUpload?: AwsS3BucketBucketLifecycleConfigurationRulesAbortIncompleteMultipartUploadDetails,
     *     ExpirationDate?: string,
     *     ExpirationInDays?: int,
     *     ExpiredObjectDeleteMarker?: bool,
     *     Filter?: AwsS3BucketBucketLifecycleConfigurationRulesFilterDetails,
     *     ID?: string,
     *     NoncurrentVersionExpirationInDays?: int,
     *     NoncurrentVersionTransitions?: list<AwsS3BucketBucketLifecycleConfigurationRulesNoncurrentVersionTransitionsDetails>,
     *     Prefix?: string,
     *     Status?: string,
     *     Transitions?: list<AwsS3BucketBucketLifecycleConfigurationRulesTransitionsDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
