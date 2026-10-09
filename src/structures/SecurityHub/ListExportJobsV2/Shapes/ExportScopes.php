<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListExportJobsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsOrganizationScope>|null $AwsOrganizations
 */
class ExportScopes extends Shape
{
    /**
     * @param array{AwsOrganizations?: list<AwsOrganizationScope>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
