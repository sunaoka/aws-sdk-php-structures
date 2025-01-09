<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTablePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string $name
 */
class DeleteTablePolicyRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
