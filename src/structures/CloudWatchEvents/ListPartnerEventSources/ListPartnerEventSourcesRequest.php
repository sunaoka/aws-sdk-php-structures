<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListPartnerEventSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property string $NextToken
 * @property int $Limit
 */
class ListPartnerEventSourcesRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix: string,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
