<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteLag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lagId
 */
class DeleteLagRequest extends Request
{
    /**
     * @param array{lagId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
