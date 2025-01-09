<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateDeviceInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $profileArn
 * @property list<string> $labels
 */
class UpdateDeviceInstanceRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     profileArn?: string,
     *     labels?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
