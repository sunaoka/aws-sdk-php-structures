<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSmsChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $SenderId
 * @property string|null $ShortCode
 */
class SMSChannelRequest extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     SenderId?: string|null,
     *     ShortCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
