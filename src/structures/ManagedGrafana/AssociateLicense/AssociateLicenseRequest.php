<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\AssociateLicense;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $grafanaToken
 * @property 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL' $licenseType
 * @property string $workspaceId
 */
class AssociateLicenseRequest extends Request
{
    /**
     * @param array{
     *     grafanaToken?: string|null,
     *     licenseType: 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL',
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
