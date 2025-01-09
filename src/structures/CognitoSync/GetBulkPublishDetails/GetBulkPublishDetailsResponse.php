<?php

namespace Sunaoka\Aws\Structures\CognitoSync\GetBulkPublishDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $IdentityPoolId
 * @property \Aws\Api\DateTimeResult $BulkPublishStartTime
 * @property \Aws\Api\DateTimeResult $BulkPublishCompleteTime
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED' $BulkPublishStatus
 * @property string $FailureMessage
 */
class GetBulkPublishDetailsResponse extends Response
{
}
