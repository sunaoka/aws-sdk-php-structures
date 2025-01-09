<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 */
class GetContactRequest extends Request
{
    /**
     * @param array{ContactId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
