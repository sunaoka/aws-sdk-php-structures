<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaceServiceAccountTokens;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $nextToken
 * @property string $serviceAccountId
 * @property list<Shapes\ServiceAccountTokenSummary> $serviceAccountTokens
 * @property string $workspaceId
 */
class ListWorkspaceServiceAccountTokensResponse extends Response
{
}
