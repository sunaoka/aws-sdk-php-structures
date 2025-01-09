<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactListName
 * @property string $EmailAddress
 */
class DeleteContactRequest extends Request
{
    /**
     * @param array{
     *     ContactListName: string,
     *     EmailAddress: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
