<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceLevelObjectiveExclusionWindows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 */
class ListServiceLevelObjectiveExclusionWindowsRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
