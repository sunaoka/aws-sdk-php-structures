<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DisassociateLicense;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL' $licenseType
 */
class DisassociateLicenseRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     licenseType: 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
