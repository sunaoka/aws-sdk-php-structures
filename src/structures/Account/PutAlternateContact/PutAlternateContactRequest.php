<?php

namespace Sunaoka\Aws\Structures\Account\PutAlternateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property 'BILLING'|'OPERATIONS'|'SECURITY' $AlternateContactType
 * @property string $EmailAddress
 * @property string $Name
 * @property string $PhoneNumber
 * @property string $Title
 */
class PutAlternateContactRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string,
     *     AlternateContactType: 'BILLING'|'OPERATIONS'|'SECURITY',
     *     EmailAddress: string,
     *     Name: string,
     *     PhoneNumber: string,
     *     Title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
