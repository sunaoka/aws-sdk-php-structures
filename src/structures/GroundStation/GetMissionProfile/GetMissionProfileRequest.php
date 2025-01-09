<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $missionProfileId
 */
class GetMissionProfileRequest extends Request
{
    /**
     * @param array{missionProfileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
