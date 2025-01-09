<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetDomainMaintenanceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $MaintenanceId
 */
class GetDomainMaintenanceStatusRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     MaintenanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
