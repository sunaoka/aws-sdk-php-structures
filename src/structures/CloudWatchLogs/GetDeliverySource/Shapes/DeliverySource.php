<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDeliverySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property list<string>|null $resourceArns
 * @property string|null $service
 * @property string|null $logType
 * @property array<string, string>|null $tags
 */
class DeliverySource extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     resourceArns?: list<string>|null,
     *     service?: string|null,
     *     logType?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
