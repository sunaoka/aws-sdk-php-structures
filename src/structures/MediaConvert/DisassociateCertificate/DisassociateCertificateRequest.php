<?php

namespace Sunaoka\Aws\Structures\MediaConvert\DisassociateCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DisassociateCertificateRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
