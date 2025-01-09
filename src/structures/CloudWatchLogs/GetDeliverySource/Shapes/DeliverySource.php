<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDeliverySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property list<string> $resourceArns
 * @property string $service
 * @property string $logType
 * @property array<string, string> $tags
 */
class DeliverySource extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     resourceArns?: list<string>,
     *     service?: string,
     *     logType?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
