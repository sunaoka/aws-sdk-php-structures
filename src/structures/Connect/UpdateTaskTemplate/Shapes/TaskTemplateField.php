<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTaskTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TaskTemplateFieldIdentifier $Id
 * @property string|null $Description
 * @property 'NAME'|'DESCRIPTION'|'SCHEDULED_TIME'|'QUICK_CONNECT'|'URL'|'NUMBER'|'TEXT'|'TEXT_AREA'|'DATE_TIME'|'BOOLEAN'|'SINGLE_SELECT'|'EMAIL'|'SELF_ASSIGN'|'EXPIRY_DURATION'|null $Type
 * @property list<string>|null $SingleSelectOptions
 */
class TaskTemplateField extends Shape
{
    /**
     * @param array{
     *     Id: TaskTemplateFieldIdentifier,
     *     Description?: string|null,
     *     Type?: 'NAME'|'DESCRIPTION'|'SCHEDULED_TIME'|'QUICK_CONNECT'|'URL'|'NUMBER'|'TEXT'|'TEXT_AREA'|'DATE_TIME'|'BOOLEAN'|'SINGLE_SELECT'|'EMAIL'|'SELF_ASSIGN'|'EXPIRY_DURATION'|null,
     *     SingleSelectOptions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
