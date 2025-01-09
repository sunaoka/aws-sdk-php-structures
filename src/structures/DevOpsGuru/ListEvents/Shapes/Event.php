<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceCollection $ResourceCollection
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $Time
 * @property string $EventSource
 * @property string $Name
 * @property 'AWS_CLOUD_TRAIL'|'AWS_CODE_DEPLOY' $DataSource
 * @property 'INFRASTRUCTURE'|'DEPLOYMENT'|'SECURITY_CHANGE'|'CONFIG_CHANGE'|'SCHEMA_CHANGE' $EventClass
 * @property list<EventResource> $Resources
 */
class Event extends Shape
{
    /**
     * @param array{
     *     ResourceCollection?: ResourceCollection,
     *     Id?: string,
     *     Time?: \Aws\Api\DateTimeResult,
     *     EventSource?: string,
     *     Name?: string,
     *     DataSource?: 'AWS_CLOUD_TRAIL'|'AWS_CODE_DEPLOY',
     *     EventClass?: 'INFRASTRUCTURE'|'DEPLOYMENT'|'SECURITY_CHANGE'|'CONFIG_CHANGE'|'SCHEMA_CHANGE',
     *     Resources?: list<EventResource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
