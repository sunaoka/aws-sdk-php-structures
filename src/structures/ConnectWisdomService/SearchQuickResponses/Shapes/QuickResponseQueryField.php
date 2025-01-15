<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchQuickResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $allowFuzziness
 * @property string $name
 * @property 'CONTAINS'|'CONTAINS_AND_PREFIX' $operator
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $priority
 * @property list<string> $values
 */
class QuickResponseQueryField extends Shape
{
    /**
     * @param array{
     *     allowFuzziness?: bool|null,
     *     name: string,
     *     operator: 'CONTAINS'|'CONTAINS_AND_PREFIX',
     *     priority?: 'HIGH'|'MEDIUM'|'LOW'|null,
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
