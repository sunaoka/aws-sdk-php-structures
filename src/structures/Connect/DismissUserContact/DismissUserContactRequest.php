<?php

namespace Sunaoka\Aws\Structures\Connect\DismissUserContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserId
 * @property string $InstanceId
 * @property string $ContactId
 */
class DismissUserContactRequest extends Request
{
    /**
     * @param array{
     *     UserId: string,
     *     InstanceId: string,
     *     ContactId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
