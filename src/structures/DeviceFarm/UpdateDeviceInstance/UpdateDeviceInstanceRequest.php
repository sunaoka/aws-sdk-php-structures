<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateDeviceInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $profileArn
 * @property list<string>|null $labels
 */
class UpdateDeviceInstanceRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     profileArn?: string|null,
     *     labels?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
