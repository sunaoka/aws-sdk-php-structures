<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteAgentOrganizationalReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 */
class DeleteAgentOrganizationalReportRequest extends Request
{
    /**
     * @param array{reportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
