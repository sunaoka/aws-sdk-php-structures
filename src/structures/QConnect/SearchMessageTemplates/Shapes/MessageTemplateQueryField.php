<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $allowFuzziness
 * @property string $name
 * @property 'CONTAINS'|'CONTAINS_AND_PREFIX' $operator
 * @property 'HIGH'|'MEDIUM'|'LOW' $priority
 * @property list<string> $values
 */
class MessageTemplateQueryField extends Shape
{
    /**
     * @param array{
     *     allowFuzziness?: bool,
     *     name: string,
     *     operator: 'CONTAINS'|'CONTAINS_AND_PREFIX',
     *     priority?: 'HIGH'|'MEDIUM'|'LOW',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
