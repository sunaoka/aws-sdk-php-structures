<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $customDNSServerName
 * @property string $customDNSServerIP
 */
class CustomDNSServer extends Shape
{
    /**
     * @param array{
     *     customDNSServerName: string,
     *     customDNSServerIP: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
