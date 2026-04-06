<?php

namespace Sunaoka\Aws\Structures\Connect\StopContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string $InstanceId
 */
class StopContactRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
