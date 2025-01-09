<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstanceNodeInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationInstanceId
 * @property int<0, 25> $MaxResults
 * @property string $NextToken
 */
class ListApplicationInstanceNodeInstancesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationInstanceId: string,
     *     MaxResults?: int<0, 25>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
