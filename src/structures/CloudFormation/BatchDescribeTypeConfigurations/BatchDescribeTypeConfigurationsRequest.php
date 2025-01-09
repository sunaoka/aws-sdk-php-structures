<?php

namespace Sunaoka\Aws\Structures\CloudFormation\BatchDescribeTypeConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TypeConfigurationIdentifier> $TypeConfigurationIdentifiers
 */
class BatchDescribeTypeConfigurationsRequest extends Request
{
    /**
     * @param array{TypeConfigurationIdentifiers: list<Shapes\TypeConfigurationIdentifier>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
