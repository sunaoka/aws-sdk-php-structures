<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdatePackageScope;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PackageID
 * @property 'ADD'|'OVERRIDE'|'REMOVE'|null $Operation
 * @property list<string>|null $PackageUserList
 */
class UpdatePackageScopeResponse extends Response
{
}
