<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $description
 * @property ServiceEventMetadata|null $eventMetadata
 */
class ServiceEventDetails extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     description: string,
     *     eventMetadata?: ServiceEventMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
