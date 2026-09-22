<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $definition
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateViewRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     definition: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
