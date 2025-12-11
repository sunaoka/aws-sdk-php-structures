<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $parentFieldId
 * @property string|null $childFieldId
 * @property list<ParentChildFieldOptionsMapping> $parentChildFieldOptionsMappings
 */
class FieldOptionsCaseRule extends Shape
{
    /**
     * @param array{
     *     parentFieldId?: string|null,
     *     childFieldId?: string|null,
     *     parentChildFieldOptionsMappings: list<ParentChildFieldOptionsMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
