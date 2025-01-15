<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetDeviceDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceDefinitionId
 * @property string $DeviceDefinitionVersionId
 * @property string|null $NextToken
 */
class GetDeviceDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     DeviceDefinitionId: string,
     *     DeviceDefinitionVersionId: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
