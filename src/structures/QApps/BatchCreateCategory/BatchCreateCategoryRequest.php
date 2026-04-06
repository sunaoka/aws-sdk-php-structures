<?php

namespace Sunaoka\Aws\Structures\QApps\BatchCreateCategory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property list<Shapes\BatchCreateCategoryInputCategory> $categories
 */
class BatchCreateCategoryRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     categories: list<Shapes\BatchCreateCategoryInputCategory>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
