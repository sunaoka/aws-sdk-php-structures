<?php

namespace Sunaoka\Aws\Structures\S3Vectors\PutVectorBucketDefaultIndexMode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $vectorBucketArn
 * @property 'CLASSIC'|'ENHANCED' $defaultIndexMode
 */
class PutVectorBucketDefaultIndexModeRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     vectorBucketArn?: string|null,
     *     defaultIndexMode: 'CLASSIC'|'ENHANCED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
