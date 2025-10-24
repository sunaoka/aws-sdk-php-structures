<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateAutomationRuleV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'resources.tags'|'compliance.control_parameters'|'databucket.tags'|'finding_info.tags'|null $FieldName
 * @property MapFilter|null $Filter
 */
class OcsfMapFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'resources.tags'|'compliance.control_parameters'|'databucket.tags'|'finding_info.tags'|null,
     *     Filter?: MapFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
