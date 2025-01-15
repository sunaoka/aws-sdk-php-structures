<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeTypeRegistration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'COMPLETE'|'IN_PROGRESS'|'FAILED'|null $ProgressStatus
 * @property string|null $Description
 * @property string|null $TypeArn
 * @property string|null $TypeVersionArn
 */
class DescribeTypeRegistrationResponse extends Response
{
}
