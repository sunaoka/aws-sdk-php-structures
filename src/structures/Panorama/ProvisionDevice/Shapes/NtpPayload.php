<?php

namespace Sunaoka\Aws\Structures\Panorama\ProvisionDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $NtpServers
 */
class NtpPayload extends Shape
{
    /**
     * @param array{NtpServers: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
