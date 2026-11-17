<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentOrganizationalReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 */
class GetAgentOrganizationalReportRequest extends Request
{
    /**
     * @param array{reportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
