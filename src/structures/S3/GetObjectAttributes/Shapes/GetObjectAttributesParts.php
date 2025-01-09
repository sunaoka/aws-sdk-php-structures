<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalPartsCount
 * @property int $PartNumberMarker
 * @property int $NextPartNumberMarker
 * @property int $MaxParts
 * @property bool $IsTruncated
 * @property list<ObjectPart> $Parts
 */
class GetObjectAttributesParts extends Shape
{
    /**
     * @param array{
     *     TotalPartsCount?: int,
     *     PartNumberMarker?: int,
     *     NextPartNumberMarker?: int,
     *     MaxParts?: int,
     *     IsTruncated?: bool,
     *     Parts?: list<ObjectPart>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
