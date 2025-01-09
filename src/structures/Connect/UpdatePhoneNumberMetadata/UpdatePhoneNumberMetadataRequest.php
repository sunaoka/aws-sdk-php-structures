<?php

namespace Sunaoka\Aws\Structures\Connect\UpdatePhoneNumberMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property string $PhoneNumberDescription
 * @property string $ClientToken
 */
class UpdatePhoneNumberMetadataRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     PhoneNumberDescription?: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
