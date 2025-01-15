<?php

namespace Sunaoka\Aws\Structures\Iot\CreateKeysAndCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $setAsActive
 */
class CreateKeysAndCertificateRequest extends Request
{
    /**
     * @param array{setAsActive?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
