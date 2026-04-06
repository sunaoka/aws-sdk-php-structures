<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEmailAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $InstanceId
 * @property string $EmailAddress
 * @property string|null $DisplayName
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateEmailAddressRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     InstanceId: string,
     *     EmailAddress: string,
     *     DisplayName?: string|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
