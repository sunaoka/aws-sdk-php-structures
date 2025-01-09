<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property array<string, string> $Tags
 */
class CreateIndexRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
