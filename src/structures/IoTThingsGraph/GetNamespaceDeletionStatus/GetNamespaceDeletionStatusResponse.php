<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetNamespaceDeletionStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $namespaceArn
 * @property string|null $namespaceName
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $status
 * @property 'VALIDATION_FAILED'|null $errorCode
 * @property string|null $errorMessage
 */
class GetNamespaceDeletionStatusResponse extends Response
{
}
