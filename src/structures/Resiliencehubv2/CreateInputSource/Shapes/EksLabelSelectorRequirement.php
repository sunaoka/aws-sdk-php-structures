<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateInputSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property 'IN'|'NOT_IN'|'EXISTS'|'DOES_NOT_EXIST' $operator
 * @property list<string>|null $values
 */
class EksLabelSelectorRequirement extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     operator: 'IN'|'NOT_IN'|'EXISTS'|'DOES_NOT_EXIST',
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
