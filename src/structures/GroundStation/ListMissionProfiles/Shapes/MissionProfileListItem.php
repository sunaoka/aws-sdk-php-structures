<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListMissionProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $missionProfileArn
 * @property string|null $missionProfileId
 * @property string|null $name
 * @property string|null $region
 */
class MissionProfileListItem extends Shape
{
    /**
     * @param array{
     *     missionProfileArn?: string|null,
     *     missionProfileId?: string|null,
     *     name?: string|null,
     *     region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
