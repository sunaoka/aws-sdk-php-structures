<?php

namespace Sunaoka\Aws\Structures\S3Tables\RenameTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string $name
 * @property string|null $newNamespaceName
 * @property string|null $newName
 * @property string|null $versionToken
 */
class RenameTableRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace: string,
     *     name: string,
     *     newNamespaceName?: string|null,
     *     newName?: string|null,
     *     versionToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
