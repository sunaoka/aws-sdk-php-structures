<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHIT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property list<PolicyParameter> $Parameters
 */
class ReviewPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyName: string,
     *     Parameters?: list<PolicyParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
