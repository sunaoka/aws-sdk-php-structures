<?php

namespace Sunaoka\Aws\Structures\MTurk\DeleteWorkerBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkerId
 * @property string $Reason
 */
class DeleteWorkerBlockRequest extends Request
{
    /**
     * @param array{
     *     WorkerId: string,
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
