<?php

namespace Sunaoka\Aws\Structures\Iam\UntagMFADevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SerialNumber
 * @property list<string> $TagKeys
 */
class UntagMFADeviceRequest extends Request
{
    /**
     * @param array{
     *     SerialNumber: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
