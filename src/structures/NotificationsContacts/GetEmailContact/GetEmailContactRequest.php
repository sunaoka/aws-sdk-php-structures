<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\GetEmailContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetEmailContactRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
