<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchQuickResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $values
 * @property 'CONTAINS'|'CONTAINS_AND_PREFIX' $operator
 * @property bool|null $allowFuzziness
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $priority
 */
class QuickResponseQueryField extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     values: list<string>,
     *     operator: 'CONTAINS'|'CONTAINS_AND_PREFIX',
     *     allowFuzziness?: bool|null,
     *     priority?: 'HIGH'|'MEDIUM'|'LOW'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
