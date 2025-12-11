<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\GetEnrollmentConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Active'|'Inactive'|'Pending'|'Failed' $status
 * @property string|null $statusReason
 * @property 'AnyAllowed'|'NoneAllowed'|null $organizationRuleMode
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTimestamp
 */
class GetEnrollmentConfigurationResponse extends Response
{
}
