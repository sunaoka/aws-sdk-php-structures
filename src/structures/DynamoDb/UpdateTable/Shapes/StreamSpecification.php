<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $StreamEnabled
 * @property 'NEW_IMAGE'|'OLD_IMAGE'|'NEW_AND_OLD_IMAGES'|'KEYS_ONLY' $StreamViewType
 */
class StreamSpecification extends Shape
{
    /**
     * @param array{
     *     StreamEnabled: bool,
     *     StreamViewType?: 'NEW_IMAGE'|'OLD_IMAGE'|'NEW_AND_OLD_IMAGES'|'KEYS_ONLY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
