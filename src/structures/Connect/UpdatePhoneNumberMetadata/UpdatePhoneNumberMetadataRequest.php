<?php

namespace Sunaoka\Aws\Structures\Connect\UpdatePhoneNumberMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property string|null $PhoneNumberDescription
 * @property string|null $ClientToken
 */
class UpdatePhoneNumberMetadataRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     PhoneNumberDescription?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
