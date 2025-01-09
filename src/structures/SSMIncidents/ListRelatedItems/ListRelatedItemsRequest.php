<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListRelatedItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $incidentRecordArn
 * @property int $maxResults
 * @property string $nextToken
 */
class ListRelatedItemsRequest extends Request
{
    /**
     * @param array{
     *     incidentRecordArn: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
