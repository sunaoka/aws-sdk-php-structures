<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetVectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $indexName
 * @property string|null $indexArn
 * @property list<string> $keys
 * @property bool|null $returnData
 * @property bool|null $returnMetadata
 */
class GetVectorsRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     indexName?: string|null,
     *     indexArn?: string|null,
     *     keys: list<string>,
     *     returnData?: bool|null,
     *     returnMetadata?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
