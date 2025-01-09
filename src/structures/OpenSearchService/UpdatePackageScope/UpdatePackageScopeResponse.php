<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdatePackageScope;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PackageID
 * @property 'ADD'|'OVERRIDE'|'REMOVE' $Operation
 * @property list<string> $PackageUserList
 */
class UpdatePackageScopeResponse extends Response
{
}
