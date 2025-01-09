<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSmsChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $SenderId
 * @property string $ShortCode
 */
class SMSChannelRequest extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     SenderId?: string,
     *     ShortCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
