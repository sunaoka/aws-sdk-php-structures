<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListMissionProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $missionProfileId
 * @property string|null $missionProfileArn
 * @property string|null $region
 * @property string|null $name
 */
class MissionProfileListItem extends Shape
{
    /**
     * @param array{
     *     missionProfileId?: string|null,
     *     missionProfileArn?: string|null,
     *     region?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
