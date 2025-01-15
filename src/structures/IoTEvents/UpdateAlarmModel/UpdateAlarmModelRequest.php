<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmModelName
 * @property string|null $alarmModelDescription
 * @property string $roleArn
 * @property int<0, 2147483647>|null $severity
 * @property Shapes\AlarmRule $alarmRule
 * @property Shapes\AlarmNotification|null $alarmNotification
 * @property Shapes\AlarmEventActions|null $alarmEventActions
 * @property Shapes\AlarmCapabilities|null $alarmCapabilities
 */
class UpdateAlarmModelRequest extends Request
{
    /**
     * @param array{
     *     alarmModelName: string,
     *     alarmModelDescription?: string|null,
     *     roleArn: string,
     *     severity?: int<0, 2147483647>|null,
     *     alarmRule: Shapes\AlarmRule,
     *     alarmNotification?: Shapes\AlarmNotification|null,
     *     alarmEventActions?: Shapes\AlarmEventActions|null,
     *     alarmCapabilities?: Shapes\AlarmCapabilities|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
