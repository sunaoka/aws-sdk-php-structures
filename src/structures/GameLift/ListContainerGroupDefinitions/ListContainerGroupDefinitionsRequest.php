<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GAME_SERVER'|'PER_INSTANCE'|null $ContainerGroupType
 * @property int<1, 100>|null $Limit
 * @property string|null $NextToken
 */
class ListContainerGroupDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     ContainerGroupType?: 'GAME_SERVER'|'PER_INSTANCE'|null,
     *     Limit?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
