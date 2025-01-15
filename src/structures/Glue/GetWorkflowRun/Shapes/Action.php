<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobName
 * @property array<string, string>|null $Arguments
 * @property int<1, max>|null $Timeout
 * @property string|null $SecurityConfiguration
 * @property NotificationProperty|null $NotificationProperty
 * @property string|null $CrawlerName
 */
class Action extends Shape
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     Arguments?: array<string, string>|null,
     *     Timeout?: int<1, max>|null,
     *     SecurityConfiguration?: string|null,
     *     NotificationProperty?: NotificationProperty|null,
     *     CrawlerName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
