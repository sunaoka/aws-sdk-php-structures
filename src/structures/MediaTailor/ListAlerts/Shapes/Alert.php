<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListAlerts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AlertCode
 * @property string $AlertMessage
 * @property 'SCHEDULING_ERROR'|'PLAYBACK_WARNING'|'INFO'|null $Category
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property list<string> $RelatedResourceArns
 * @property string $ResourceArn
 */
class Alert extends Shape
{
    /**
     * @param array{
     *     AlertCode: string,
     *     AlertMessage: string,
     *     Category?: 'SCHEDULING_ERROR'|'PLAYBACK_WARNING'|'INFO'|null,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     RelatedResourceArns: list<string>,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
