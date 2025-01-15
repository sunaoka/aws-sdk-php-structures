<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitivityInspectionTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $allowListIds
 * @property list<string>|null $customDataIdentifierIds
 * @property list<string>|null $managedDataIdentifierIds
 */
class SensitivityInspectionTemplateIncludes extends Shape
{
    /**
     * @param array{
     *     allowListIds?: list<string>|null,
     *     customDataIdentifierIds?: list<string>|null,
     *     managedDataIdentifierIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
