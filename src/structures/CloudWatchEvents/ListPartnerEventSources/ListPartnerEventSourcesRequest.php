<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListPartnerEventSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property string|null $NextToken
 * @property int<1, 100>|null $Limit
 */
class ListPartnerEventSourcesRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix: string,
     *     NextToken?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
