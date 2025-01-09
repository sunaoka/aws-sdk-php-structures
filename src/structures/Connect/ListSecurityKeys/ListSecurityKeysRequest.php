<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 2> $MaxResults
 */
class ListSecurityKeysRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 2>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
