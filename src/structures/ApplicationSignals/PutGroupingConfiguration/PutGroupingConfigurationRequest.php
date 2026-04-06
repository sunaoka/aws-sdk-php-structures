<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\PutGroupingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\GroupingAttributeDefinition> $GroupingAttributeDefinitions
 */
class PutGroupingConfigurationRequest extends Request
{
    /**
     * @param array{GroupingAttributeDefinitions: list<Shapes\GroupingAttributeDefinition>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
