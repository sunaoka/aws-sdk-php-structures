<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GenerateClientCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class GenerateClientCertificateRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
