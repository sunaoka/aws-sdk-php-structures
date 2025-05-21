<?php

namespace Sunaoka\Aws\Structures\Deadline\GetLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $limitId
 */
class GetLimitRequest extends Request
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
