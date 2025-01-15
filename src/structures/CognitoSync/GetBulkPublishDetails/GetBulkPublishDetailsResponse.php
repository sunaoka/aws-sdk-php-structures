<?php

namespace Sunaoka\Aws\Structures\CognitoSync\GetBulkPublishDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $IdentityPoolId
 * @property \Aws\Api\DateTimeResult|null $BulkPublishStartTime
 * @property \Aws\Api\DateTimeResult|null $BulkPublishCompleteTime
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $BulkPublishStatus
 * @property string|null $FailureMessage
 */
class GetBulkPublishDetailsResponse extends Response
{
}
