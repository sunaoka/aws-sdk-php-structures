<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateNamespace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $CapacityRegion
 * @property 'CREATED'|'CREATING'|'DELETING'|'RETRYABLE_FAILURE'|'NON_RETRYABLE_FAILURE'|null $CreationStatus
 * @property 'QUICKSIGHT'|null $IdentityStore
 * @property string|null $RequestId
 * @property int|null $Status
 */
class CreateNamespaceResponse extends Response
{
}
