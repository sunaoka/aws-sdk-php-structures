<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetOutpostResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetOutpostResolverRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
