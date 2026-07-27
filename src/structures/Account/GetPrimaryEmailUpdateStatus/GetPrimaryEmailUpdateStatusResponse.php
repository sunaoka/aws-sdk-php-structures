<?php

namespace Sunaoka\Aws\Structures\Account\GetPrimaryEmailUpdateStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING'|'ACCEPTED'|'COMPLETED'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class GetPrimaryEmailUpdateStatusResponse extends Response
{
}
