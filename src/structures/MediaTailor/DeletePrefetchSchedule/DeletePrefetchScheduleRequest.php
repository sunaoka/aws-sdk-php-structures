<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeletePrefetchSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $PlaybackConfigurationName
 */
class DeletePrefetchScheduleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     PlaybackConfigurationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
