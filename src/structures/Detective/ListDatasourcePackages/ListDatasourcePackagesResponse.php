<?php

namespace Sunaoka\Aws\Structures\Detective\ListDatasourcePackages;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', Shapes\DatasourcePackageIngestDetail> $DatasourcePackages
 * @property string $NextToken
 */
class ListDatasourcePackagesResponse extends Response
{
}
