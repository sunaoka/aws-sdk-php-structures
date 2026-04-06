<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactArn
 */
class GetContactRequest extends Request
{
    /**
     * @param array{ContactArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
