<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmModelName
 * @property string $alarmModelDescription
 * @property string $roleArn
 * @property list<Shapes\Tag> $tags
 * @property string $key
 * @property int<0, 2147483647> $severity
 * @property Shapes\AlarmRule $alarmRule
 * @property Shapes\AlarmNotification $alarmNotification
 * @property Shapes\AlarmEventActions $alarmEventActions
 * @property Shapes\AlarmCapabilities $alarmCapabilities
 */
class CreateAlarmModelRequest extends Request
{
    /**
     * @param array{
     *     alarmModelName: string,
     *     alarmModelDescription?: string,
     *     roleArn: string,
     *     tags?: list<Shapes\Tag>,
     *     key?: string,
     *     severity?: int<0, 2147483647>,
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
