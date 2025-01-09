<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchQuickResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $includeNoExistence
 * @property string $name
 * @property 'EQUALS'|'PREFIX' $operator
 * @property list<string> $values
 */
class QuickResponseFilterField extends Shape
{
    /**
     * @param array{
     *     includeNoExistence?: bool,
     *     name: string,
     *     operator: 'EQUALS'|'PREFIX',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
