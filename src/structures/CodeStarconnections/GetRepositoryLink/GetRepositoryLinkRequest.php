<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\GetRepositoryLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RepositoryLinkId
 */
class GetRepositoryLinkRequest extends Request
{
    /**
     * @param array{RepositoryLinkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
