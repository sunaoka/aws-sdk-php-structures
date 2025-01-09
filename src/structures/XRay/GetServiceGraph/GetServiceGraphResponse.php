<?php

namespace Sunaoka\Aws\Structures\XRay\GetServiceGraph;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<Shapes\Service> $Services
 * @property bool $ContainsOldGroupVersions
 * @property string $NextToken
 */
class GetServiceGraphResponse extends Response
{
}
