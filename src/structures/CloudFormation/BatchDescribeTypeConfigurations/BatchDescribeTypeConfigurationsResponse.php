<?php

namespace Sunaoka\Aws\Structures\CloudFormation\BatchDescribeTypeConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BatchDescribeTypeConfigurationsError> $Errors
 * @property list<Shapes\TypeConfigurationIdentifier> $UnprocessedTypeConfigurations
 * @property list<Shapes\TypeConfigurationDetails> $TypeConfigurations
 */
class BatchDescribeTypeConfigurationsResponse extends Response
{
}
