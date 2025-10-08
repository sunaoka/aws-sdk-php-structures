<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAutomationRuleV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $SeverityId
 * @property string|null $Comment
 * @property int|null $StatusId
 */
class AutomationRulesFindingFieldsUpdateV2 extends Shape
{
    /**
     * @param array{
     *     SeverityId?: int|null,
     *     Comment?: string|null,
     *     StatusId?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
