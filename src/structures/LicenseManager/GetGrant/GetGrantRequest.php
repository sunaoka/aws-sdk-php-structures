<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GrantArn
 * @property string|null $Version
 */
class GetGrantRequest extends Request
{
    /**
     * @param array{
     *     GrantArn: string,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
