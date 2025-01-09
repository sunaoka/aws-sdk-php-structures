<?php

namespace Sunaoka\Aws\Structures\Iam\GenerateOrganizationsAccessReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EntityPath
 * @property string $OrganizationsPolicyId
 */
class GenerateOrganizationsAccessReportRequest extends Request
{
    /**
     * @param array{
     *     EntityPath: string,
     *     OrganizationsPolicyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
