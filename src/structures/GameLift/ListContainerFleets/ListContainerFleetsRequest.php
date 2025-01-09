<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerGroupDefinitionName
 * @property int<1, max> $Limit
 * @property string $NextToken
 */
class ListContainerFleetsRequest extends Request
{
    /**
     * @param array{
     *     ContainerGroupDefinitionName?: string,
     *     Limit?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
