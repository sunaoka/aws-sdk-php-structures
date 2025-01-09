<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $domainArn
 * @property string $domainId
 * @property 'Active'|'CreationInProgress'|'CreationFailed' $domainStatus
 * @property string $name
 * @property array<string, string> $tags
 */
class GetDomainResponse extends Response
{
}
