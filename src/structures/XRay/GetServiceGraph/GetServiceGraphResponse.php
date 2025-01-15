<?php

namespace Sunaoka\Aws\Structures\XRay\GetServiceGraph;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property list<Shapes\Service>|null $Services
 * @property bool|null $ContainsOldGroupVersions
 * @property string|null $NextToken
 */
class GetServiceGraphResponse extends Response
{
}
