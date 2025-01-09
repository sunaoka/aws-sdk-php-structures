<?php

namespace Sunaoka\Aws\Structures\Inspector\CreateResourceGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ResourceGroupTag> $resourceGroupTags
 */
class CreateResourceGroupRequest extends Request
{
    /**
     * @param array{resourceGroupTags: list<Shapes\ResourceGroupTag>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
