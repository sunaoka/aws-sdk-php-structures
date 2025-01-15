<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NAME'|'CREATION_DATE'|null $ListBy
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 * @property 'ASCENDING'|'DESCENDING'|null $Order
 */
class ListQueuesRequest extends Request
{
    /**
     * @param array{
     *     ListBy?: 'NAME'|'CREATION_DATE'|null,
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null,
     *     Order?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
