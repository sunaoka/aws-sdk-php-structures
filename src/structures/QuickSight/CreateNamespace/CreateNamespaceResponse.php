<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateNamespace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $CapacityRegion
 * @property 'CREATED'|'CREATING'|'DELETING'|'RETRYABLE_FAILURE'|'NON_RETRYABLE_FAILURE' $CreationStatus
 * @property 'QUICKSIGHT' $IdentityStore
 * @property string $RequestId
 * @property int $Status
 */
class CreateNamespaceResponse extends Response
{
}
