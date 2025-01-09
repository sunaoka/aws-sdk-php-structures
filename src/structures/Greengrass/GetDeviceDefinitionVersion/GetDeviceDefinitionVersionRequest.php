<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetDeviceDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceDefinitionId
 * @property string $DeviceDefinitionVersionId
 * @property string $NextToken
 */
class GetDeviceDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     DeviceDefinitionId: string,
     *     DeviceDefinitionVersionId: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
