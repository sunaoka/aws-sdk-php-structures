<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 */
class DescribeCertificateRequest extends Request
{
    /**
     * @param array{certificateId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
