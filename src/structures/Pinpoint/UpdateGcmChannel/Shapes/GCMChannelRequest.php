<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateGcmChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiKey
 * @property string $DefaultAuthenticationMethod
 * @property bool $Enabled
 * @property string $ServiceJson
 */
class GCMChannelRequest extends Shape
{
    /**
     * @param array{
     *     ApiKey?: string,
     *     DefaultAuthenticationMethod?: string,
     *     Enabled?: bool,
     *     ServiceJson?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
