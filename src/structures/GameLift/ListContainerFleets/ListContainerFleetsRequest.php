<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerGroupDefinitionName
 * @property int $Limit
 * @property string $NextToken
 */
class ListContainerFleetsRequest extends Request
{
    /**
     * @param array{
     *     ContainerGroupDefinitionName?: string,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
