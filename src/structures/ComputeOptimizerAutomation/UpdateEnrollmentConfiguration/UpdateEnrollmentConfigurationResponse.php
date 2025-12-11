<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\UpdateEnrollmentConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Active'|'Inactive'|'Pending'|'Failed' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $lastUpdatedTimestamp
 */
class UpdateEnrollmentConfigurationResponse extends Response
{
}
