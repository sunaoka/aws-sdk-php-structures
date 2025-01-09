<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateSensitivityInspectionTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowListIds
 * @property list<string> $customDataIdentifierIds
 * @property list<string> $managedDataIdentifierIds
 */
class SensitivityInspectionTemplateIncludes extends Shape
{
    /**
     * @param array{
     *     allowListIds?: list<string>,
     *     customDataIdentifierIds?: list<string>,
     *     managedDataIdentifierIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
