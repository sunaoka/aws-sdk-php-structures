<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'createdAt'|'jobStatus'|'name'|'jobType'|null $attributeName
 * @property 'ASC'|'DESC'|null $orderBy
 */
class ListJobsSortCriteria extends Shape
{
    /**
     * @param array{
     *     attributeName?: 'createdAt'|'jobStatus'|'name'|'jobType'|null,
     *     orderBy?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
