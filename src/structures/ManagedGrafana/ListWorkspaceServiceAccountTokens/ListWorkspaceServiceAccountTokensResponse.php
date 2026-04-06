<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaceServiceAccountTokens;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\ServiceAccountTokenSummary> $serviceAccountTokens
 * @property string $serviceAccountId
 * @property string $workspaceId
 */
class ListWorkspaceServiceAccountTokensResponse extends Response
{
}
