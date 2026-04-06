<?php

namespace Sunaoka\Aws\Structures\QApps\BatchUpdateCategory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property list<Shapes\CategoryInput> $categories
 */
class BatchUpdateCategoryRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     categories: list<Shapes\CategoryInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
