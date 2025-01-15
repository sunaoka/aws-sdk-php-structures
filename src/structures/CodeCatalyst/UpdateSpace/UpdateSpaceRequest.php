<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\UpdateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 */
class UpdateSpaceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
