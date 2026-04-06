<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OAUTH'|'CODECONNECTIONS' $type
 * @property string|null $resource
 */
class SourceAuth extends Shape
{
    /**
     * @param array{
     *     type: 'OAUTH'|'CODECONNECTIONS',
     *     resource?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
