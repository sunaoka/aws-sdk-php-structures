<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifecycleExpiration|null $Expiration
 * @property string|null $ID
 * @property string|null $Prefix
 * @property LifecycleRuleFilter|null $Filter
 * @property 'Enabled'|'Disabled' $Status
 * @property list<Transition>|null $Transitions
 * @property list<NoncurrentVersionTransition>|null $NoncurrentVersionTransitions
 * @property NoncurrentVersionExpiration|null $NoncurrentVersionExpiration
 * @property AbortIncompleteMultipartUpload|null $AbortIncompleteMultipartUpload
 */
class LifecycleRule extends Shape
{
    /**
     * @param array{
     *     Expiration?: LifecycleExpiration|null,
     *     ID?: string|null,
     *     Prefix?: string|null,
     *     Filter?: LifecycleRuleFilter|null,
     *     Status: 'Enabled'|'Disabled',
     *     Transitions?: list<Transition>|null,
     *     NoncurrentVersionTransitions?: list<NoncurrentVersionTransition>|null,
     *     NoncurrentVersionExpiration?: NoncurrentVersionExpiration|null,
     *     AbortIncompleteMultipartUpload?: AbortIncompleteMultipartUpload|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
