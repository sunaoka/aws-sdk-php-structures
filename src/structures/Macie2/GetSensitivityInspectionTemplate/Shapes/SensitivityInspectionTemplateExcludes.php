<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitivityInspectionTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $managedDataIdentifierIds
 */
class SensitivityInspectionTemplateExcludes extends Shape
{
    /**
     * @param array{managedDataIdentifierIds?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
