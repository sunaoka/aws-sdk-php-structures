<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListConfiguredAudienceModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 */
class ListConfiguredAudienceModelsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
