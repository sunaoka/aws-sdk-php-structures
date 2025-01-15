<?php

namespace Sunaoka\Aws\Structures\Detective\CreateGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $Tags
 */
class CreateGraphRequest extends Request
{
    /**
     * @param array{Tags?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
