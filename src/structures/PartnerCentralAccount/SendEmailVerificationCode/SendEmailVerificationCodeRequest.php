<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\SendEmailVerificationCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Email
 */
class SendEmailVerificationCodeRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Email: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
