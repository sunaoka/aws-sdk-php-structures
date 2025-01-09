<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property Shapes\LcmOperationInfo $lcmOpInfo
 * @property Shapes\GetSolNetworkInstanceMetadata $metadata
 * @property string $nsInstanceDescription
 * @property string $nsInstanceName
 * @property 'INSTANTIATED'|'NOT_INSTANTIATED'|'UPDATED'|'IMPAIRED'|'UPDATE_FAILED'|'STOPPED'|'DELETED'|'INSTANTIATE_IN_PROGRESS'|'INTENT_TO_UPDATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'TERMINATE_IN_PROGRESS' $nsState
 * @property string $nsdId
 * @property string $nsdInfoId
 * @property array<string, string> $tags
 */
class GetSolNetworkInstanceResponse extends Response
{
}
