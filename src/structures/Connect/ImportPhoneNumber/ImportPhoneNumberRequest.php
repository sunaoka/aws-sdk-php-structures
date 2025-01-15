<?php

namespace Sunaoka\Aws\Structures\Connect\ImportPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $SourcePhoneNumberArn
 * @property string|null $PhoneNumberDescription
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class ImportPhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     SourcePhoneNumberArn: string,
     *     PhoneNumberDescription?: string|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
