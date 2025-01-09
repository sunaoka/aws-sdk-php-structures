<?php

namespace Sunaoka\Aws\Structures\Account\DeleteAlternateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property 'BILLING'|'OPERATIONS'|'SECURITY' $AlternateContactType
 */
class DeleteAlternateContactRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string,
     *     AlternateContactType: 'BILLING'|'OPERATIONS'|'SECURITY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
