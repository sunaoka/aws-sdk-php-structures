<?php

namespace Sunaoka\Aws\Structures\Sns\ListPlatformApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlatformApplicationArn
 * @property array<string, string> $Attributes
 */
class PlatformApplication extends Shape
{
    /**
     * @param array{
     *     PlatformApplicationArn?: string,
     *     Attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
