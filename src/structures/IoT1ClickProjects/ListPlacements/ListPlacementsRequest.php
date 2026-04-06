<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\ListPlacements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListPlacementsRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
