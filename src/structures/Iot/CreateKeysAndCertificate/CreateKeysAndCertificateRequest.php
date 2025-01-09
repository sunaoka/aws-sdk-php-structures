<?php

namespace Sunaoka\Aws\Structures\Iot\CreateKeysAndCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $setAsActive
 */
class CreateKeysAndCertificateRequest extends Request
{
    /**
     * @param array{setAsActive?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
