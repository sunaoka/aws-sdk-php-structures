<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicense;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseArn
 * @property string $Version
 */
class GetLicenseRequest extends Request
{
    /**
     * @param array{
     *     LicenseArn: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
