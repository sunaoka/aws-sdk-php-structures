<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string|null $VersionId
 * @property string|null $ETag
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property int|null $Size
 */
class ObjectIdentifier extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     VersionId?: string|null,
     *     ETag?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Size?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
