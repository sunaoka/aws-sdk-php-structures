<?php

namespace Sunaoka\Aws\Structures\S3Files\ListFileSystems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $fileSystemArn
 * @property string $fileSystemId
 * @property string|null $name
 * @property string $bucket
 * @property 'available'|'creating'|'deleting'|'deleted'|'error'|'updating' $status
 * @property string|null $statusMessage
 * @property string $roleArn
 * @property string $ownerId
 */
class ListFileSystemsDescription extends Shape
{
    /**
     * @param array{
     *     creationTime: \Aws\Api\DateTimeResult,
     *     fileSystemArn: string,
     *     fileSystemId: string,
     *     name?: string|null,
     *     bucket: string,
     *     status: 'available'|'creating'|'deleting'|'deleted'|'error'|'updating',
     *     statusMessage?: string|null,
     *     roleArn: string,
     *     ownerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
