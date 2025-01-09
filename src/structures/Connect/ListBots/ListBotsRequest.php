<?php

namespace Sunaoka\Aws\Structures\Connect\ListBots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'V1'|'V2' $LexVersion
 */
class ListBotsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     LexVersion: 'V1'|'V2'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
