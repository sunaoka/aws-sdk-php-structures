<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'createdAt'|'jobStatus'|'name'|'jobType' $attributeName
 * @property 'ASC'|'DESC' $orderBy
 */
class ListJobsSortCriteria extends Shape
{
    /**
     * @param array{
     *     attributeName?: 'createdAt'|'jobStatus'|'name'|'jobType',
     *     orderBy?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
