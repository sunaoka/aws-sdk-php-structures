<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $limitId
 */
class DeleteLimitRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     limitId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
