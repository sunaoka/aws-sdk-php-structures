<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListDeviceDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceDefinitionId
 * @property string $MaxResults
 * @property string $NextToken
 */
class ListDeviceDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     DeviceDefinitionId: string,
     *     MaxResults?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
