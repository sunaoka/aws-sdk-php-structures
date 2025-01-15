<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property Shapes\ProblemDetails|null $error
 * @property string|null $id
 * @property 'INSTANTIATE'|'UPDATE'|'TERMINATE'|null $lcmOperationType
 * @property Shapes\GetSolNetworkOperationMetadata|null $metadata
 * @property string|null $nsInstanceId
 * @property 'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED'|null $operationState
 * @property array<string, string>|null $tags
 * @property list<Shapes\GetSolNetworkOperationTaskDetails>|null $tasks
 * @property 'MODIFY_VNF_INFORMATION'|'UPDATE_NS'|null $updateType
 */
class GetSolNetworkOperationResponse extends Response
{
}
