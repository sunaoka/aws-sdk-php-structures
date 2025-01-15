<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalPartsCount
 * @property int|null $PartNumberMarker
 * @property int|null $NextPartNumberMarker
 * @property int|null $MaxParts
 * @property bool|null $IsTruncated
 * @property list<ObjectPart>|null $Parts
 */
class GetObjectAttributesParts extends Shape
{
    /**
     * @param array{
     *     TotalPartsCount?: int|null,
     *     PartNumberMarker?: int|null,
     *     NextPartNumberMarker?: int|null,
     *     MaxParts?: int|null,
     *     IsTruncated?: bool|null,
     *     Parts?: list<ObjectPart>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
