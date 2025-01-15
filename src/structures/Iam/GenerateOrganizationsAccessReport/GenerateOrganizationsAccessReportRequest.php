<?php

namespace Sunaoka\Aws\Structures\Iam\GenerateOrganizationsAccessReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EntityPath
 * @property string|null $OrganizationsPolicyId
 */
class GenerateOrganizationsAccessReportRequest extends Request
{
    /**
     * @param array{
     *     EntityPath: string,
     *     OrganizationsPolicyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
