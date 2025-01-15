<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateAdmChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $ClientSecret
 * @property bool|null $Enabled
 */
class ADMChannelRequest extends Shape
{
    /**
     * @param array{
     *     ClientId: string,
     *     ClientSecret: string,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
