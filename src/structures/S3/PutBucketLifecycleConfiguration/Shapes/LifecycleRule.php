<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifecycleExpiration $Expiration
 * @property string $ID
 * @property string $Prefix
 * @property LifecycleRuleFilter $Filter
 * @property 'Enabled'|'Disabled' $Status
 * @property list<Transition> $Transitions
 * @property list<NoncurrentVersionTransition> $NoncurrentVersionTransitions
 * @property NoncurrentVersionExpiration $NoncurrentVersionExpiration
 * @property AbortIncompleteMultipartUpload $AbortIncompleteMultipartUpload
 */
class LifecycleRule extends Shape
{
    /**
     * @param array{
     *     Expiration?: LifecycleExpiration,
     *     ID?: string,
     *     Prefix?: string,
     *     Filter?: LifecycleRuleFilter,
     *     Status: 'Enabled'|'Disabled',
     *     Transitions?: list<Transition>,
     *     NoncurrentVersionTransitions?: list<NoncurrentVersionTransition>,
     *     NoncurrentVersionExpiration?: NoncurrentVersionExpiration,
     *     AbortIncompleteMultipartUpload?: AbortIncompleteMultipartUpload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
