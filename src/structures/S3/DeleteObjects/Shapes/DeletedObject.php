<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $VersionId
 * @property bool $DeleteMarker
 * @property string $DeleteMarkerVersionId
 */
class DeletedObject extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     VersionId?: string,
     *     DeleteMarker?: bool,
     *     DeleteMarkerVersionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
