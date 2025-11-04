<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RequiredCaseRule|null $required
 * @property FieldOptionsCaseRule|null $fieldOptions
 * @property HiddenCaseRule|null $hidden
 */
class CaseRuleDetails extends Shape
{
    /**
     * @param array{
     *     required?: RequiredCaseRule|null,
     *     fieldOptions?: FieldOptionsCaseRule|null,
     *     hidden?: HiddenCaseRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
