<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $shareId
 */
class DeleteShareRequest extends Request
{
    /**
     * @param array{shareId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
