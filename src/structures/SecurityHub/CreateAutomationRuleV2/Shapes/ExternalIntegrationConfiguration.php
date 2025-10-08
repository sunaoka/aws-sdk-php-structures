<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAutomationRuleV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectorArn
 */
class ExternalIntegrationConfiguration extends Shape
{
    /**
     * @param array{ConnectorArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
