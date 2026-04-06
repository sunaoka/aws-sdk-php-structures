<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetAccessSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessSourceId
 */
class GetAccessSourceRequest extends Request
{
    /**
     * @param array{accessSourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
