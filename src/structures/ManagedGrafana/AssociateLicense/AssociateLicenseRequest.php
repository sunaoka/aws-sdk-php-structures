<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\AssociateLicense;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL' $licenseType
 * @property string|null $grafanaToken
 */
class AssociateLicenseRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     licenseType: 'ENTERPRISE'|'ENTERPRISE_FREE_TRIAL',
     *     grafanaToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
