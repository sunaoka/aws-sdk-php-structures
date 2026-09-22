<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $definition
 * @property string|null $description
 */
class UpdateViewRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     definition?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
