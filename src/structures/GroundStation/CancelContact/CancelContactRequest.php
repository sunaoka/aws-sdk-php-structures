<?php

namespace Sunaoka\Aws\Structures\GroundStation\CancelContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contactId
 */
class CancelContactRequest extends Request
{
    /**
     * @param array{contactId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
