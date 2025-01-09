<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\DeleteEmailContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteEmailContactRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
