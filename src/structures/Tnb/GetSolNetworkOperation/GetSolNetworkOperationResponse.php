<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property Shapes\ProblemDetails $error
 * @property string $id
 * @property 'INSTANTIATE'|'UPDATE'|'TERMINATE' $lcmOperationType
 * @property Shapes\GetSolNetworkOperationMetadata $metadata
 * @property string $nsInstanceId
 * @property 'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $operationState
 * @property array<string, string> $tags
 * @property list<Shapes\GetSolNetworkOperationTaskDetails> $tasks
 * @property 'MODIFY_VNF_INFORMATION'|'UPDATE_NS' $updateType
 */
class GetSolNetworkOperationResponse extends Response
{
}
