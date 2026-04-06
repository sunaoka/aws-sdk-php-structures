<?php

namespace Sunaoka\Aws\Structures\Organizations\TerminateResponsibilityTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult|null $EndTimestamp
 */
class TerminateResponsibilityTransferRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     EndTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
