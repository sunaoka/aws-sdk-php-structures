<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteLicense;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseArn
 * @property string $SourceVersion
 */
class DeleteLicenseRequest extends Request
{
    /**
     * @param array{
     *     LicenseArn: string,
     *     SourceVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
