<?php

namespace Sunaoka\Aws\Structures\S3Tables\UpdateTableMetadataLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string $name
 * @property string $versionToken
 * @property string $metadataLocation
 */
class UpdateTableMetadataLocationRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace: string,
     *     name: string,
     *     versionToken: string,
     *     metadataLocation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
