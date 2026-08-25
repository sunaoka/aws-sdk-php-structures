<?php

namespace Sunaoka\Aws\Structures\IAMToolbox\GetRequestAuthorizationDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\Document> $requestContext
 * @property list<Shapes\Evaluation> $evaluations
 * @property list<Shapes\PolicyInfo> $policies
 * @property string|null $nextToken
 */
class GetRequestAuthorizationDetailsResponse extends Response
{
}
