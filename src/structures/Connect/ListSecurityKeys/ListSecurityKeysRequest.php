<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 2>|null $MaxResults
 */
class ListSecurityKeysRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 2>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
