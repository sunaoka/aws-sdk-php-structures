<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\CreateEmailContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $emailAddress
 * @property array<string, string>|null $tags
 */
class CreateEmailContactRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     emailAddress: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
