<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int<1, 100>|null $Limit
 * @property string|null $NextToken
 */
class ListContainerGroupDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Limit?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
