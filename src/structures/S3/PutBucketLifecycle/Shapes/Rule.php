<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifecycleExpiration $Expiration
 * @property string $ID
 * @property string $Prefix
 * @property 'Enabled'|'Disabled' $Status
 * @property Transition $Transition
 * @property NoncurrentVersionTransition $NoncurrentVersionTransition
 * @property NoncurrentVersionExpiration $NoncurrentVersionExpiration
 * @property AbortIncompleteMultipartUpload $AbortIncompleteMultipartUpload
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Expiration?: LifecycleExpiration,
     *     ID?: string,
     *     Prefix: string,
     *     Status: 'Enabled'|'Disabled',
     *     Transition?: Transition,
     *     NoncurrentVersionTransition?: NoncurrentVersionTransition,
     *     NoncurrentVersionExpiration?: NoncurrentVersionExpiration,
     *     AbortIncompleteMultipartUpload?: AbortIncompleteMultipartUpload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
