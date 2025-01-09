<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmModelName
 * @property string $alarmModelDescription
 * @property string $roleArn
 * @property int $severity
 * @property Shapes\AlarmRule $alarmRule
 * @property Shapes\AlarmNotification $alarmNotification
 * @property Shapes\AlarmEventActions $alarmEventActions
 * @property Shapes\AlarmCapabilities $alarmCapabilities
 */
class UpdateAlarmModelRequest extends Request
{
    /**
     * @param array{
     *     alarmModelName: string,
     *     alarmModelDescription?: string,
     *     roleArn: string,
     *     severity?: int,
     *     alarmRule: Shapes\AlarmRule,
     *     alarmNotification?: Shapes\AlarmNotification,
     *     alarmEventActions?: Shapes\AlarmEventActions,
     *     alarmCapabilities?: Shapes\AlarmCapabilities
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
