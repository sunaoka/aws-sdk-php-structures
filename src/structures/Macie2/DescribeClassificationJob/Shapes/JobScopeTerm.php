<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleScopeTerm|null $simpleScopeTerm
 * @property TagScopeTerm|null $tagScopeTerm
 */
class JobScopeTerm extends Shape
{
    /**
     * @param array{
     *     simpleScopeTerm?: SimpleScopeTerm|null,
     *     tagScopeTerm?: TagScopeTerm|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
