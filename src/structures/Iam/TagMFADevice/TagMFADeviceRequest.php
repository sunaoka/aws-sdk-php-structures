<?php

namespace Sunaoka\Aws\Structures\Iam\TagMFADevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SerialNumber
 * @property list<Shapes\Tag> $Tags
 */
class TagMFADeviceRequest extends Request
{
    /**
     * @param array{
     *     SerialNumber: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
