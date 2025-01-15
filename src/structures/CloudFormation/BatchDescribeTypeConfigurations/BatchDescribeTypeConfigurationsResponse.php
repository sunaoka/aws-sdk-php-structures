<?php

namespace Sunaoka\Aws\Structures\CloudFormation\BatchDescribeTypeConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BatchDescribeTypeConfigurationsError>|null $Errors
 * @property list<Shapes\TypeConfigurationIdentifier>|null $UnprocessedTypeConfigurations
 * @property list<Shapes\TypeConfigurationDetails>|null $TypeConfigurations
 */
class BatchDescribeTypeConfigurationsResponse extends Response
{
}
