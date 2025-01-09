<?php

namespace Sunaoka\Aws\Structures\GroundStation\DeleteMissionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $missionProfileId
 */
class DeleteMissionProfileRequest extends Request
{
    /**
     * @param array{missionProfileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
