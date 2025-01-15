<?php

namespace Sunaoka\Aws\Structures\Chime\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsAlexaForBusinessEnabled
 * @property string|null $AlexaForBusinessRoomArn
 */
class AlexaForBusinessMetadata extends Shape
{
    /**
     * @param array{
     *     IsAlexaForBusinessEnabled?: bool|null,
     *     AlexaForBusinessRoomArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
