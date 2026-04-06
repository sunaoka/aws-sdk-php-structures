<?php

namespace Sunaoka\Aws\Structures\CodeConnections\DeleteRepositoryLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RepositoryLinkId
 */
class DeleteRepositoryLinkRequest extends Request
{
    /**
     * @param array{RepositoryLinkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
