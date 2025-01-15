<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceCollection|null $ResourceCollection
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $Time
 * @property string|null $EventSource
 * @property string|null $Name
 * @property 'AWS_CLOUD_TRAIL'|'AWS_CODE_DEPLOY'|null $DataSource
 * @property 'INFRASTRUCTURE'|'DEPLOYMENT'|'SECURITY_CHANGE'|'CONFIG_CHANGE'|'SCHEMA_CHANGE'|null $EventClass
 * @property list<EventResource>|null $Resources
 */
class Event extends Shape
{
    /**
     * @param array{
     *     ResourceCollection?: ResourceCollection|null,
     *     Id?: string|null,
     *     Time?: \Aws\Api\DateTimeResult|null,
     *     EventSource?: string|null,
     *     Name?: string|null,
     *     DataSource?: 'AWS_CLOUD_TRAIL'|'AWS_CODE_DEPLOY'|null,
     *     EventClass?: 'INFRASTRUCTURE'|'DEPLOYMENT'|'SECURITY_CHANGE'|'CONFIG_CHANGE'|'SCHEMA_CHANGE'|null,
     *     Resources?: list<EventResource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
