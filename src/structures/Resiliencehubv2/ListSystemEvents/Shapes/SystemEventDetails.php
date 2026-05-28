<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $description
 * @property SystemEventMetadata|null $eventMetadata
 */
class SystemEventDetails extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     description: string,
     *     eventMetadata?: SystemEventMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
