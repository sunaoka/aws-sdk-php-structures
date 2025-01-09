<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property list<Processor> $Processors
 */
class ProcessingConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     Processors?: list<Processor>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
