<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetBuildBatches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OAUTH' $type
 * @property string|null $resource
 */
class SourceAuth extends Shape
{
    /**
     * @param array{
     *     type: 'OAUTH',
     *     resource?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
