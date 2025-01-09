<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GAME_SERVER'|'PER_INSTANCE' $ContainerGroupType
 * @property int<1, 100> $Limit
 * @property string $NextToken
 */
class ListContainerGroupDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     ContainerGroupType?: 'GAME_SERVER'|'PER_INSTANCE',
     *     Limit?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
