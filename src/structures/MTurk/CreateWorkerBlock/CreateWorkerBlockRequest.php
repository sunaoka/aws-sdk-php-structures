<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateWorkerBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkerId
 * @property string $Reason
 */
class CreateWorkerBlockRequest extends Request
{
    /**
     * @param array{
     *     WorkerId: string,
     *     Reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
