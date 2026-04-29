<?php

namespace Sunaoka\Aws\Structures\Account\PutAlternateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Title
 * @property string $EmailAddress
 * @property string $PhoneNumber
 * @property 'BILLING'|'OPERATIONS'|'SECURITY' $AlternateContactType
 * @property string|null $AccountId
 */
class PutAlternateContactRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Title: string,
     *     EmailAddress: string,
     *     PhoneNumber: string,
     *     AlternateContactType: 'BILLING'|'OPERATIONS'|'SECURITY',
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
