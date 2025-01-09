<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPrefetchSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $PlaybackConfigurationName
 */
class GetPrefetchScheduleRequest extends Request
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
