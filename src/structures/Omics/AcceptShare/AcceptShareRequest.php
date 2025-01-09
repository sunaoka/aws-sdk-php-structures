<?php

namespace Sunaoka\Aws\Structures\Omics\AcceptShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $shareId
 */
class AcceptShareRequest extends Request
{
    /**
     * @param array{shareId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
