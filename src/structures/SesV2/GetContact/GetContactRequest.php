<?php

namespace Sunaoka\Aws\Structures\SesV2\GetContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactListName
 * @property string $EmailAddress
 */
class GetContactRequest extends Request
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
