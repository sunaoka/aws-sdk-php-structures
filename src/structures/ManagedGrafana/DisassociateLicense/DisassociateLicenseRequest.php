<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DisassociateLicense;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL' $licenseType
 * @property string $workspaceId
 */
class DisassociateLicenseRequest extends Request
{
    /**
     * @param array{
     *     licenseType: 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL',
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
