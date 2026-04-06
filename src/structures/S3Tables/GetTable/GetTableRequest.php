<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $tableBucketARN
 * @property string|null $namespace
 * @property string|null $name
 * @property string|null $tableArn
 */
class GetTableRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN?: string|null,
     *     namespace?: string|null,
     *     name?: string|null,
     *     tableArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
