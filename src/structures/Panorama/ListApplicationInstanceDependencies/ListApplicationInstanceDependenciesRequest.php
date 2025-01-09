<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstanceDependencies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationInstanceId
 * @property int<0, 25> $MaxResults
 * @property string $NextToken
 */
class ListApplicationInstanceDependenciesRequest extends Request
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
