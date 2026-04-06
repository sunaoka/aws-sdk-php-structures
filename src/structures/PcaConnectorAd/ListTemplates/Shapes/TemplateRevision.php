<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MajorRevision
 * @property int $MinorRevision
 */
class TemplateRevision extends Shape
{
    /**
     * @param array{
     *     MajorRevision: int,
     *     MinorRevision: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
