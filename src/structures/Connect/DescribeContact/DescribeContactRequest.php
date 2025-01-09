<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 */
class DescribeContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
