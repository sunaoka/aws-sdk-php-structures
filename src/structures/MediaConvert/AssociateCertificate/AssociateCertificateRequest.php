<?php

namespace Sunaoka\Aws\Structures\MediaConvert\AssociateCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class AssociateCertificateRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
