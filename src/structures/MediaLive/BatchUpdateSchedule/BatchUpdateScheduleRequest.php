<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 * @property Shapes\BatchScheduleActionCreateRequest|null $Creates
 * @property Shapes\BatchScheduleActionDeleteRequest|null $Deletes
 */
class BatchUpdateScheduleRequest extends Request
{
    /**
     * @param array{
     *     ChannelId: string,
     *     Creates?: Shapes\BatchScheduleActionCreateRequest|null,
     *     Deletes?: Shapes\BatchScheduleActionDeleteRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
