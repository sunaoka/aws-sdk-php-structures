<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteResiliencyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resiliencyGroupId
 */
class DeleteResiliencyGroupRequest extends Request
{
    /**
     * @param array{resiliencyGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
