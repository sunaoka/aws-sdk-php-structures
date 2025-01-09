<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $VersionId
 * @property string $ETag
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property int $Size
 */
class ObjectIdentifier extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     VersionId?: string,
     *     ETag?: string,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     Size?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
