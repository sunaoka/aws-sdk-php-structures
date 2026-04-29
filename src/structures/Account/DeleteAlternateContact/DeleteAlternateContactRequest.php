<?php

namespace Sunaoka\Aws\Structures\Account\DeleteAlternateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BILLING'|'OPERATIONS'|'SECURITY' $AlternateContactType
 * @property string|null $AccountId
 */
class DeleteAlternateContactRequest extends Request
{
    /**
     * @param array{
     *     AlternateContactType: 'BILLING'|'OPERATIONS'|'SECURITY',
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
