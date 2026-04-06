<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\PutRoomSkillParameter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterKey
 * @property string $ParameterValue
 */
class RoomSkillParameter extends Shape
{
    /**
     * @param array{
     *     ParameterKey: string,
     *     ParameterValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
