<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHIT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property list<PolicyParameter>|null $Parameters
 */
class ReviewPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyName: string,
     *     Parameters?: list<PolicyParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
