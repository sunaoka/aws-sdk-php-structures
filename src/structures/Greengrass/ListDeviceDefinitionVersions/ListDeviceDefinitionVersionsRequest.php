<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListDeviceDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceDefinitionId
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class ListDeviceDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     DeviceDefinitionId: string,
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
