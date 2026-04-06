<?php

namespace Sunaoka\Aws\Structures\QApps\ListCategories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 */
class ListCategoriesRequest extends Request
{
    /**
     * @param array{instanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
