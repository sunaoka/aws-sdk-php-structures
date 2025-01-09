<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobName
 * @property array<string, string> $Arguments
 * @property int $Timeout
 * @property string $SecurityConfiguration
 * @property NotificationProperty $NotificationProperty
 * @property string $CrawlerName
 */
class Action extends Shape
{
    /**
     * @param array{
     *     JobName?: string,
     *     Arguments?: array<string, string>,
     *     Timeout?: int,
     *     SecurityConfiguration?: string,
     *     NotificationProperty?: NotificationProperty,
     *     CrawlerName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
