<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListMissionProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $missionProfileArn
 * @property string $missionProfileId
 * @property string $name
 * @property string $region
 */
class MissionProfileListItem extends Shape
{
    /**
     * @param array{
     *     missionProfileArn?: string,
     *     missionProfileId?: string,
     *     name?: string,
     *     region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
