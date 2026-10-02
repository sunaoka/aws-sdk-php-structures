<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\ListWebFunctionRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $revisionArn
 * @property string $revisionId
 * @property string|null $description
 * @property 'Pending'|'Active'|'Failed' $state
 * @property string $stateReason
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class FunctionRevisionSummary extends Shape
{
    /**
     * @param array{
     *     revisionArn: string,
     *     revisionId: string,
     *     description?: string|null,
     *     state: 'Pending'|'Active'|'Failed',
     *     stateReason: string,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
