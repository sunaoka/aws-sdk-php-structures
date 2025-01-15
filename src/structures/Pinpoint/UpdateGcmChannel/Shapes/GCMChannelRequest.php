<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateGcmChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiKey
 * @property string|null $DefaultAuthenticationMethod
 * @property bool|null $Enabled
 * @property string|null $ServiceJson
 */
class GCMChannelRequest extends Shape
{
    /**
     * @param array{
     *     ApiKey?: string|null,
     *     DefaultAuthenticationMethod?: string|null,
     *     Enabled?: bool|null,
     *     ServiceJson?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
