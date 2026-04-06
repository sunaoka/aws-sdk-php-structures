<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchQuickResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string>|null $values
 * @property 'EQUALS'|'PREFIX' $operator
 * @property bool|null $includeNoExistence
 */
class QuickResponseFilterField extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     values?: list<string>|null,
     *     operator: 'EQUALS'|'PREFIX',
     *     includeNoExistence?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
