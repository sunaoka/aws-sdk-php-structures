<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleScopeTerm $simpleScopeTerm
 * @property TagScopeTerm $tagScopeTerm
 */
class JobScopeTerm extends Shape
{
    /**
     * @param array{
     *     simpleScopeTerm?: SimpleScopeTerm,
     *     tagScopeTerm?: TagScopeTerm
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
