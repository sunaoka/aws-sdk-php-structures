<?php

namespace Sunaoka\Aws\Structures\Omics\GetShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $shareId
 */
class GetShareRequest extends Request
{
    /**
     * @param array{shareId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
