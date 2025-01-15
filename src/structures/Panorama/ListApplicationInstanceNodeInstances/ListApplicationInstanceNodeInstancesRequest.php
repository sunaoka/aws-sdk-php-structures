<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstanceNodeInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationInstanceId
 * @property int<0, 25>|null $MaxResults
 * @property string|null $NextToken
 */
class ListApplicationInstanceNodeInstancesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationInstanceId: string,
     *     MaxResults?: int<0, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
