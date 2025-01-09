<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobName
 * @property array<string, string> $Arguments
 * @property int<1, max> $Timeout
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
     *     Timeout?: int<1, max>,
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
