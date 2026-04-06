<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListExtensionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string $Name
 * @property string $Namespace
 * @property string|null $NextToken
 */
class ListExtensionVersionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     Name: string,
     *     Namespace: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
