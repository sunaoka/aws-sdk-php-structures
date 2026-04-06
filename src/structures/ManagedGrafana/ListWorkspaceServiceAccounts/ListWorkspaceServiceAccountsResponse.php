<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaceServiceAccounts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\ServiceAccountSummary> $serviceAccounts
 * @property string $workspaceId
 */
class ListWorkspaceServiceAccountsResponse extends Response
{
}
