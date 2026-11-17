<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentOrganizationalReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $label
 * @property Shapes\OrganizationalReportFilters|null $filters
 */
class CreateAgentOrganizationalReportRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     label?: string|null,
     *     filters?: Shapes\OrganizationalReportFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
