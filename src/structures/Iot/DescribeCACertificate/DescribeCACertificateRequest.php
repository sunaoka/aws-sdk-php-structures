<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCACertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 */
class DescribeCACertificateRequest extends Request
{
    /**
     * @param array{certificateId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
