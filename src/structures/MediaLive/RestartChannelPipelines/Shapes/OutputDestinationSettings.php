<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PasswordParam
 * @property string|null $StreamName
 * @property string|null $Url
 * @property string|null $Username
 */
class OutputDestinationSettings extends Shape
{
    /**
     * @param array{
     *     PasswordParam?: string|null,
     *     StreamName?: string|null,
     *     Url?: string|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
