<?php

namespace Sunaoka\Aws\Structures\S3Vectors\UpdateIndexMode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $indexName
 * @property string|null $indexArn
 * @property 'CLASSIC'|'ENHANCED' $indexMode
 */
class UpdateIndexModeRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     indexName?: string|null,
     *     indexArn?: string|null,
     *     indexMode: 'CLASSIC'|'ENHANCED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
