<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketTagging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Bucket
 * @property Shapes\Tagging $Tagging
 */
class PutBucketTaggingRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Bucket: string,
     *     Tagging: Shapes\Tagging
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
