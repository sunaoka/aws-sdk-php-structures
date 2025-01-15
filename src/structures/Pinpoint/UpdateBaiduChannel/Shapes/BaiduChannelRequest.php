<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateBaiduChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiKey
 * @property bool|null $Enabled
 * @property string $SecretKey
 */
class BaiduChannelRequest extends Shape
{
    /**
     * @param array{
     *     ApiKey: string,
     *     Enabled?: bool|null,
     *     SecretKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
