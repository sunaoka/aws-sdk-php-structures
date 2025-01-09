<?php

namespace Sunaoka\Aws\Structures\Connect\ImportPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $SourcePhoneNumberArn
 * @property string $PhoneNumberDescription
 * @property array<string, string> $Tags
 * @property string $ClientToken
 */
class ImportPhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     SourcePhoneNumberArn: string,
     *     PhoneNumberDescription?: string,
     *     Tags?: array<string, string>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
