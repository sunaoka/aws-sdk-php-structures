<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolNetworkOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property ProblemDetails|null $error
 * @property string $id
 * @property 'INSTANTIATE'|'UPDATE'|'TERMINATE' $lcmOperationType
 * @property ListSolNetworkOperationsMetadata|null $metadata
 * @property string $nsInstanceId
 * @property 'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $operationState
 */
class ListSolNetworkOperationsInfo extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     error?: ProblemDetails|null,
     *     id: string,
     *     lcmOperationType: 'INSTANTIATE'|'UPDATE'|'TERMINATE',
     *     metadata?: ListSolNetworkOperationsMetadata|null,
     *     nsInstanceId: string,
     *     operationState: 'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
