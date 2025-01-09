<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 * @property Shapes\BatchScheduleActionCreateRequest $Creates
 * @property Shapes\BatchScheduleActionDeleteRequest $Deletes
 */
class BatchUpdateScheduleRequest extends Request
{
    /**
     * @param array{
     *     ChannelId: string,
     *     Creates?: Shapes\BatchScheduleActionCreateRequest,
     *     Deletes?: Shapes\BatchScheduleActionDeleteRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
