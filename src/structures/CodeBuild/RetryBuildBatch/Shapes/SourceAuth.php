<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OAUTH'|'CODECONNECTIONS'|'SECRETS_MANAGER' $type
 * @property string|null $resource
 */
class SourceAuth extends Shape
{
    /**
     * @param array{
     *     type: 'OAUTH'|'CODECONNECTIONS'|'SECRETS_MANAGER',
     *     resource?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
