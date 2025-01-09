<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int<1, 100> $Limit
 * @property string $NextToken
 */
class ListContainerGroupDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Limit?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
