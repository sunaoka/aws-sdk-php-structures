<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ContainerGroupDefinitionName
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class ListContainerFleetsRequest extends Request
{
    /**
     * @param array{
     *     ContainerGroupDefinitionName?: string|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
