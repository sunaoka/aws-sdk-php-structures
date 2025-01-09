<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\ActivateEmailContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $code
 */
class ActivateEmailContactRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     code: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
