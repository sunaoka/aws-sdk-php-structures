<?php

namespace Sunaoka\Aws\Structures\CloudFront\VerifyDnsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Domain
 * @property string $Identifier
 */
class VerifyDnsConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     Identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
