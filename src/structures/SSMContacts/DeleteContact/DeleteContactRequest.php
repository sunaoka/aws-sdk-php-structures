<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DeleteContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 */
class DeleteContactRequest extends Request
{
    /**
     * @param array{ContactId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
