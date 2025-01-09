<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GenerateClientCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property array<string, string> $tags
 */
class GenerateClientCertificateRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
