<?php

namespace Sunaoka\Aws\Structures\Detective\UpdateDatasourcePackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property list<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING'> $DatasourcePackages
 */
class UpdateDatasourcePackagesRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     DatasourcePackages: list<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
