<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $domainArn
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property 'Active'|'CreationInProgress'|'CreationFailed' $domainStatus
 * @property array<string, string>|null $tags
 */
class GetDomainResponse extends Response
{
}
