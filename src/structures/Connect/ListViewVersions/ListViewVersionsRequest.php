<?php

namespace Sunaoka\Aws\Structures\Connect\ListViewVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ViewId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListViewVersionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ViewId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
