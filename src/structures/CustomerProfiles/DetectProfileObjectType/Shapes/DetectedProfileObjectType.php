<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DetectProfileObjectType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceLastUpdatedTimestampFormat
 * @property array<string, ObjectTypeField> $Fields
 * @property array<string, list<ObjectTypeKey>> $Keys
 */
class DetectedProfileObjectType extends Shape
{
    /**
     * @param array{
     *     SourceLastUpdatedTimestampFormat?: string,
     *     Fields?: array<string, ObjectTypeField>,
     *     Keys?: array<string, list<ObjectTypeKey>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
