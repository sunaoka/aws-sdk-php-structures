<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DeleteAlarmModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmModelName
 */
class DeleteAlarmModelRequest extends Request
{
    /**
     * @param array{alarmModelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
