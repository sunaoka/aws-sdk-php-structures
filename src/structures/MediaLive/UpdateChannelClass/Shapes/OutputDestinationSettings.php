<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PasswordParam
 * @property string $StreamName
 * @property string $Url
 * @property string $Username
 */
class OutputDestinationSettings extends Shape
{
    /**
     * @param array{
     *     PasswordParam?: string,
     *     StreamName?: string,
     *     Url?: string,
     *     Username?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
