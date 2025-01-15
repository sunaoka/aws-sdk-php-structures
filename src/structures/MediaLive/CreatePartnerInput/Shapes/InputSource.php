<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreatePartnerInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PasswordParam
 * @property string|null $Url
 * @property string|null $Username
 */
class InputSource extends Shape
{
    /**
     * @param array{
     *     PasswordParam?: string|null,
     *     Url?: string|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
