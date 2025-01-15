<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $ApproximateCreationDateTime
 * @property array<string, AttributeValue>|null $Keys
 * @property array<string, AttributeValue>|null $NewImage
 * @property array<string, AttributeValue>|null $OldImage
 * @property string|null $SequenceNumber
 * @property int<1, max>|null $SizeBytes
 * @property 'NEW_IMAGE'|'OLD_IMAGE'|'NEW_AND_OLD_IMAGES'|'KEYS_ONLY'|null $StreamViewType
 */
class StreamRecord extends Shape
{
    /**
     * @param array{
     *     ApproximateCreationDateTime?: \Aws\Api\DateTimeResult|null,
     *     Keys?: array<string, AttributeValue>|null,
     *     NewImage?: array<string, AttributeValue>|null,
     *     OldImage?: array<string, AttributeValue>|null,
     *     SequenceNumber?: string|null,
     *     SizeBytes?: int<1, max>|null,
     *     StreamViewType?: 'NEW_IMAGE'|'OLD_IMAGE'|'NEW_AND_OLD_IMAGES'|'KEYS_ONLY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
