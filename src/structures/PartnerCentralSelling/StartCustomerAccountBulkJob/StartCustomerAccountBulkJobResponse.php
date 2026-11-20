<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartCustomerAccountBulkJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class StartCustomerAccountBulkJobResponse extends Response
{
}
