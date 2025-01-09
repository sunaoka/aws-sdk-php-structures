<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NAME'|'CREATION_DATE' $ListBy
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'ASCENDING'|'DESCENDING' $Order
 */
class ListQueuesRequest extends Request
{
    /**
     * @param array{
     *     ListBy?: 'NAME'|'CREATION_DATE',
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Order?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
