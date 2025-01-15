<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutJobFailureResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JobFailed'|'ConfigurationError'|'PermissionError'|'RevisionOutOfSync'|'RevisionUnavailable'|'SystemUnavailable' $type
 * @property string $message
 * @property string|null $externalExecutionId
 */
class FailureDetails extends Shape
{
    /**
     * @param array{
     *     type: 'JobFailed'|'ConfigurationError'|'PermissionError'|'RevisionOutOfSync'|'RevisionUnavailable'|'SystemUnavailable',
     *     message: string,
     *     externalExecutionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
