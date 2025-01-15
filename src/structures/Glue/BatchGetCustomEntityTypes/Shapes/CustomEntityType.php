<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetCustomEntityTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $RegexString
 * @property list<string>|null $ContextWords
 */
class CustomEntityType extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     RegexString: string,
     *     ContextWords?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
