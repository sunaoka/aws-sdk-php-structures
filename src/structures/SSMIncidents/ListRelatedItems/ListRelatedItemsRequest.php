<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListRelatedItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $incidentRecordArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListRelatedItemsRequest extends Request
{
    /**
     * @param array{
     *     incidentRecordArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
