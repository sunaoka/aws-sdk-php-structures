<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListTagsForDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class ListTagsForDomainRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
