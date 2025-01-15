<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $Name
 * @property 'Basic'|'Plus'|'Pro'|'ProTrial'|null $DefaultLicense
 */
class UpdateAccountRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Name?: string|null,
     *     DefaultLicense?: 'Basic'|'Plus'|'Pro'|'ProTrial'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
