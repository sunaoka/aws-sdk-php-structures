<?php

namespace Sunaoka\Aws\Structures\Account\GetAlternateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property 'BILLING'|'OPERATIONS'|'SECURITY' $AlternateContactType
 */
class GetAlternateContactRequest extends Request
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
