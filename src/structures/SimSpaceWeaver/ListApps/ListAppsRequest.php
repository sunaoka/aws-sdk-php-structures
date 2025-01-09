<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\ListApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 * @property int<1, max> $MaxResults
 * @property string $NextToken
 * @property string $Simulation
 */
class ListAppsRequest extends Request
{
    /**
     * @param array{
     *     Domain?: string,
     *     MaxResults?: int<1, max>,
     *     NextToken?: string,
     *     Simulation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
