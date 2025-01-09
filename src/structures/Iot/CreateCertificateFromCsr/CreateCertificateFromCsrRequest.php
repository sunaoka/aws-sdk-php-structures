<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCertificateFromCsr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateSigningRequest
 * @property bool $setAsActive
 */
class CreateCertificateFromCsrRequest extends Request
{
    /**
     * @param array{
     *     certificateSigningRequest: string,
     *     setAsActive?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
