<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $ApproximateCreationDateTime
 * @property array<string, AttributeValue> $Keys
 * @property array<string, AttributeValue> $NewImage
 * @property array<string, AttributeValue> $OldImage
 * @property string $SequenceNumber
 * @property int $SizeBytes
 * @property 'NEW_IMAGE'|'OLD_IMAGE'|'NEW_AND_OLD_IMAGES'|'KEYS_ONLY' $StreamViewType
 */
class StreamRecord extends Shape
{
    /**
     * @param array{
     *     ApproximateCreationDateTime?: \Aws\Api\DateTimeResult,
     *     Keys?: array<string, AttributeValue>,
     *     NewImage?: array<string, AttributeValue>,
     *     OldImage?: array<string, AttributeValue>,
     *     SequenceNumber?: string,
     *     SizeBytes?: int,
     *     StreamViewType?: 'NEW_IMAGE'|'OLD_IMAGE'|'NEW_AND_OLD_IMAGES'|'KEYS_ONLY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
