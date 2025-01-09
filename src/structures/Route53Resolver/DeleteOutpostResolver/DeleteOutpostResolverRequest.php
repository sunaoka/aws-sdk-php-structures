<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteOutpostResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteOutpostResolverRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
