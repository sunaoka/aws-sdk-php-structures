<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseRuleId
 * @property string|null $fieldId
 */
class TemplateRule extends Shape
{
    /**
     * @param array{
     *     caseRuleId: string,
     *     fieldId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
