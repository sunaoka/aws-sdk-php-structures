<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceSyncBlocker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $resolvedReason
 */
class UpdateServiceSyncBlockerRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     resolvedReason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
