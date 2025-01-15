<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateIndexRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
