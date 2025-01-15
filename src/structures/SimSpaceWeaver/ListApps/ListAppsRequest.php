<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\ListApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Domain
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 * @property string $Simulation
 */
class ListAppsRequest extends Request
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null,
     *     Simulation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
