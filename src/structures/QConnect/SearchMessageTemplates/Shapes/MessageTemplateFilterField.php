<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $includeNoExistence
 * @property string $name
 * @property 'EQUALS'|'PREFIX' $operator
 * @property list<string>|null $values
 */
class MessageTemplateFilterField extends Shape
{
    /**
     * @param array{
     *     includeNoExistence?: bool|null,
     *     name: string,
     *     operator: 'EQUALS'|'PREFIX',
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
