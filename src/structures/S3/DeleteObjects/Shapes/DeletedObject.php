<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $VersionId
 * @property bool|null $DeleteMarker
 * @property string|null $DeleteMarkerVersionId
 */
class DeletedObject extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     VersionId?: string|null,
     *     DeleteMarker?: bool|null,
     *     DeleteMarkerVersionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
