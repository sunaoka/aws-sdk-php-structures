<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteAccessSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessSourceId
 */
class DeleteAccessSourceRequest extends Request
{
    /**
     * @param array{accessSourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
