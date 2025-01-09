<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstanceNodeInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationInstanceId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListApplicationInstanceNodeInstancesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationInstanceId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
