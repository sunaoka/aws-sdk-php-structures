<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateExpirationForHIT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITId
 * @property \Aws\Api\DateTimeResult $ExpireAt
 */
class UpdateExpirationForHITRequest extends Request
{
    /**
     * @param array{
     *     HITId: string,
     *     ExpireAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
