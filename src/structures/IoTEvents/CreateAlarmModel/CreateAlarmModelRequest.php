<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmModelName
 * @property string|null $alarmModelDescription
 * @property string $roleArn
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $key
 * @property int<0, 2147483647>|null $severity
 * @property Shapes\AlarmRule $alarmRule
 * @property Shapes\AlarmNotification|null $alarmNotification
 * @property Shapes\AlarmEventActions|null $alarmEventActions
 * @property Shapes\AlarmCapabilities|null $alarmCapabilities
 */
class CreateAlarmModelRequest extends Request
{
    /**
     * @param array{
     *     alarmModelName: string,
     *     alarmModelDescription?: string|null,
     *     roleArn: string,
     *     tags?: list<Shapes\Tag>|null,
     *     key?: string|null,
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
