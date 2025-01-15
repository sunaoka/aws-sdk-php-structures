<?php

namespace Sunaoka\Aws\Structures\Connect\ListBots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 25>|null $MaxResults
 * @property 'V1'|'V2' $LexVersion
 */
class ListBotsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 25>|null,
     *     LexVersion: 'V1'|'V2'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
