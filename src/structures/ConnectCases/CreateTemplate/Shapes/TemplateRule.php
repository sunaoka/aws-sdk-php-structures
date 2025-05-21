<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseRuleId
 * @property string $fieldId
 */
class TemplateRule extends Shape
{
    /**
     * @param array{
     *     caseRuleId: string,
     *     fieldId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
