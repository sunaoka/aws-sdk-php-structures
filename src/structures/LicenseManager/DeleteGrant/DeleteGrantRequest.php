<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GrantArn
 * @property string $StatusReason
 * @property string $Version
 */
class DeleteGrantRequest extends Request
{
    /**
     * @param array{
     *     GrantArn: string,
     *     StatusReason?: string,
     *     Version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
