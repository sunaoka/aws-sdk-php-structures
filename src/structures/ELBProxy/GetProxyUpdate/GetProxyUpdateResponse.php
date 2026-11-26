<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxyUpdate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $proxyArn
 * @property string $updateId
 * @property Shapes\ProxyUpdateState $state
 * @property Shapes\ProxyUpdateDetails $details
 * @property \Aws\Api\DateTimeResult $submittedAt
 * @property \Aws\Api\DateTimeResult|null $validatedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 */
class GetProxyUpdateResponse extends Response
{
}
