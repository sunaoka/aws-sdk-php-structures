<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListPlaybackConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
