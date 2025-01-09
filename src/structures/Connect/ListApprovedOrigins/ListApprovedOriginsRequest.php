<?php

namespace Sunaoka\Aws\Structures\Connect\ListApprovedOrigins;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 25> $MaxResults
 */
class ListApprovedOriginsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 25>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
