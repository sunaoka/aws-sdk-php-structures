<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Name
 * @property 'Basic'|'Plus'|'Pro'|'ProTrial' $DefaultLicense
 */
class UpdateAccountRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Name?: string,
     *     DefaultLicense?: 'Basic'|'Plus'|'Pro'|'ProTrial'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
