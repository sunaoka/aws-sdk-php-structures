<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutCompositeAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $ActionsEnabled
 * @property list<string>|null $AlarmActions
 * @property string|null $AlarmDescription
 * @property string $AlarmName
 * @property string $AlarmRule
 * @property list<string>|null $InsufficientDataActions
 * @property list<string>|null $OKActions
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ActionsSuppressor
 * @property int|null $ActionsSuppressorWaitPeriod
 * @property int|null $ActionsSuppressorExtensionPeriod
 */
class PutCompositeAlarmRequest extends Request
{
    /**
     * @param array{
     *     ActionsEnabled?: bool|null,
     *     AlarmActions?: list<string>|null,
     *     AlarmDescription?: string|null,
     *     AlarmName: string,
     *     AlarmRule: string,
     *     InsufficientDataActions?: list<string>|null,
     *     OKActions?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ActionsSuppressor?: string|null,
     *     ActionsSuppressorWaitPeriod?: int|null,
     *     ActionsSuppressorExtensionPeriod?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
