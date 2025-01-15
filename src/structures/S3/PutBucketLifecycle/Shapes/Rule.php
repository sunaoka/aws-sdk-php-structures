<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifecycleExpiration|null $Expiration
 * @property string|null $ID
 * @property string $Prefix
 * @property 'Enabled'|'Disabled' $Status
 * @property Transition|null $Transition
 * @property NoncurrentVersionTransition|null $NoncurrentVersionTransition
 * @property NoncurrentVersionExpiration|null $NoncurrentVersionExpiration
 * @property AbortIncompleteMultipartUpload|null $AbortIncompleteMultipartUpload
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Expiration?: LifecycleExpiration|null,
     *     ID?: string|null,
     *     Prefix: string,
     *     Status: 'Enabled'|'Disabled',
     *     Transition?: Transition|null,
     *     NoncurrentVersionTransition?: NoncurrentVersionTransition|null,
     *     NoncurrentVersionExpiration?: NoncurrentVersionExpiration|null,
     *     AbortIncompleteMultipartUpload?: AbortIncompleteMultipartUpload|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
