<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEmailAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $InstanceId
 * @property string $EmailAddress
 * @property string $DisplayName
 * @property array<string, string> $Tags
 * @property string $ClientToken
 */
class CreateEmailAddressRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     InstanceId: string,
     *     EmailAddress: string,
     *     DisplayName?: string,
     *     Tags?: array<string, string>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
