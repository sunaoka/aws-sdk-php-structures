<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $model
 * @property list<SortProperty> $sort
 * @property Predicate $predicate
 * @property list<string> $identifiers
 */
class ComponentDataConfiguration extends Shape
{
    /**
     * @param array{
     *     model: string,
     *     sort?: list<SortProperty>,
     *     predicate?: Predicate,
     *     identifiers?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
