<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PasswordParam
 * @property string $Url
 * @property string $Username
 */
class InputSourceRequest extends Shape
{
    /**
     * @param array{
     *     PasswordParam?: string,
     *     Url?: string,
     *     Username?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
