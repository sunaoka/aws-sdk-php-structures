<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitivityInspectionTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $managedDataIdentifierIds
 */
class SensitivityInspectionTemplateExcludes extends Shape
{
    /**
     * @param array{managedDataIdentifierIds?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
