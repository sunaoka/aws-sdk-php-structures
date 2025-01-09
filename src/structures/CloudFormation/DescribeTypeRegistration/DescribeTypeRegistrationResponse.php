<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeTypeRegistration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'COMPLETE'|'IN_PROGRESS'|'FAILED' $ProgressStatus
 * @property string $Description
 * @property string $TypeArn
 * @property string $TypeVersionArn
 */
class DescribeTypeRegistrationResponse extends Response
{
}
