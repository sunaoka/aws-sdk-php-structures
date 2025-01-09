<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int $Limit
 * @property string $NextToken
 */
class ListContainerGroupDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
