<?php

namespace Sunaoka\Aws\Structures\S3Files\CreateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucket
 * @property string|null $prefix
 * @property string|null $clientToken
 * @property string|null $kmsKeyId
 * @property string $roleArn
 * @property list<Shapes\Tag>|null $tags
 * @property bool|null $acceptBucketWarning
 */
class CreateFileSystemRequest extends Request
{
    /**
     * @param array{
     *     bucket: string,
     *     prefix?: string|null,
     *     clientToken?: string|null,
     *     kmsKeyId?: string|null,
     *     roleArn: string,
     *     tags?: list<Shapes\Tag>|null,
     *     acceptBucketWarning?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
