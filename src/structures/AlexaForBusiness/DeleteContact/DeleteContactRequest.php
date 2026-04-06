<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactArn
 */
class DeleteContactRequest extends Request
{
    /**
     * @param array{ContactArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
