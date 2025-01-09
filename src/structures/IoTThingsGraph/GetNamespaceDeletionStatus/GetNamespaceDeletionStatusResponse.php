<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetNamespaceDeletionStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $namespaceArn
 * @property string $namespaceName
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 * @property 'VALIDATION_FAILED' $errorCode
 * @property string $errorMessage
 */
class GetNamespaceDeletionStatusResponse extends Response
{
}
