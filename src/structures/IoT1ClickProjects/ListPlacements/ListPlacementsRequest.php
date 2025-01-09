<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\ListPlacements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListPlacementsRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
