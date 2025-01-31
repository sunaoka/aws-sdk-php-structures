<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListAlerts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AlertCode
 * @property string $AlertMessage
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property list<string> $RelatedResourceArns
 * @property string $ResourceArn
 * @property 'SCHEDULING_ERROR'|'PLAYBACK_WARNING'|'INFO'|null $Category
 */
class Alert extends Shape
{
    /**
     * @param array{
     *     AlertCode: string,
     *     AlertMessage: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     RelatedResourceArns: list<string>,
     *     ResourceArn: string,
     *     Category?: 'SCHEDULING_ERROR'|'PLAYBACK_WARNING'|'INFO'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
