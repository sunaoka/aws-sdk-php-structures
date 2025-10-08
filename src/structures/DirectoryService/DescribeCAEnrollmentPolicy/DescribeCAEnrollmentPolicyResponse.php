<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeCAEnrollmentPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DirectoryId
 * @property string|null $PcaConnectorArn
 * @property 'InProgress'|'Success'|'Failed'|'Disabling'|'Disabled'|'Impaired'|null $CaEnrollmentPolicyStatus
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDateTime
 * @property string|null $CaEnrollmentPolicyStatusReason
 */
class DescribeCAEnrollmentPolicyResponse extends Response
{
}
