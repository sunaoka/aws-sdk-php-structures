<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateAccessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property 'BILLING_TOKEN' $AccessorType
 * @property array<string, string>|null $Tags
 */
class CreateAccessorRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     AccessorType: 'BILLING_TOKEN',
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
