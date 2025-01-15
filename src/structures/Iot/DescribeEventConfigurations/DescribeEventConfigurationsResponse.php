<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeEventConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<'THING'|'THING_GROUP'|'THING_TYPE'|'THING_GROUP_MEMBERSHIP'|'THING_GROUP_HIERARCHY'|'THING_TYPE_ASSOCIATION'|'JOB'|'JOB_EXECUTION'|'POLICY'|'CERTIFICATE'|'CA_CERTIFICATE', Shapes\Configuration>|null $eventConfigurations
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 */
class DescribeEventConfigurationsResponse extends Response
{
}
