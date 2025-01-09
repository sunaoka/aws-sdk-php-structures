<?php

namespace Sunaoka\Aws\Structures\Chime\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsAlexaForBusinessEnabled
 * @property string $AlexaForBusinessRoomArn
 */
class AlexaForBusinessMetadata extends Shape
{
    /**
     * @param array{
     *     IsAlexaForBusinessEnabled?: bool,
     *     AlexaForBusinessRoomArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
