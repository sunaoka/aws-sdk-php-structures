<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DetectProfileObjectType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceLastUpdatedTimestampFormat
 * @property array<string, ObjectTypeField>|null $Fields
 * @property array<string, list<ObjectTypeKey>>|null $Keys
 */
class DetectedProfileObjectType extends Shape
{
    /**
     * @param array{
     *     SourceLastUpdatedTimestampFormat?: string|null,
     *     Fields?: array<string, ObjectTypeField>|null,
     *     Keys?: array<string, list<ObjectTypeKey>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
