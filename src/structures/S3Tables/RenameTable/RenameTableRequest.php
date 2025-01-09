<?php

namespace Sunaoka\Aws\Structures\S3Tables\RenameTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string $name
 * @property string $newNamespaceName
 * @property string $newName
 * @property string $versionToken
 */
class RenameTableRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace: string,
     *     name: string,
     *     newNamespaceName?: string,
     *     newName?: string,
     *     versionToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
