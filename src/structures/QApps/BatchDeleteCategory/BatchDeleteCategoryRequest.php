<?php

namespace Sunaoka\Aws\Structures\QApps\BatchDeleteCategory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property list<string> $categories
 */
class BatchDeleteCategoryRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     categories: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
