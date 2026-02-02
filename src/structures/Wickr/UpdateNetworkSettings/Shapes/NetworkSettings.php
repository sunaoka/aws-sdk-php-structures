<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateNetworkSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enableClientMetrics
 * @property ReadReceiptConfig|null $readReceiptConfig
 * @property bool|null $dataRetention
 */
class NetworkSettings extends Shape
{
    /**
     * @param array{
     *     enableClientMetrics?: bool|null,
     *     readReceiptConfig?: ReadReceiptConfig|null,
     *     dataRetention?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
