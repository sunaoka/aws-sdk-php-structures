<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutCompositeAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $ActionsEnabled
 * @property list<string> $AlarmActions
 * @property string $AlarmDescription
 * @property string $AlarmName
 * @property string $AlarmRule
 * @property list<string> $InsufficientDataActions
 * @property list<string> $OKActions
 * @property list<Shapes\Tag> $Tags
 * @property string $ActionsSuppressor
 * @property int $ActionsSuppressorWaitPeriod
 * @property int $ActionsSuppressorExtensionPeriod
 */
class PutCompositeAlarmRequest extends Request
{
    /**
     * @param array{
     *     ActionsEnabled?: bool,
     *     AlarmActions?: list<string>,
     *     AlarmDescription?: string,
     *     AlarmName: string,
     *     AlarmRule: string,
     *     InsufficientDataActions?: list<string>,
     *     OKActions?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     ActionsSuppressor?: string,
     *     ActionsSuppressorWaitPeriod?: int,
     *     ActionsSuppressorExtensionPeriod?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
