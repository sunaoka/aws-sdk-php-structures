<?php

namespace Sunaoka\Aws\Structures\Account\GetAlternateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 * @property 'BILLING'|'OPERATIONS'|'SECURITY' $AlternateContactType
 */
class GetAlternateContactRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     AlternateContactType: 'BILLING'|'OPERATIONS'|'SECURITY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
