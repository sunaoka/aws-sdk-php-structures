<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateEventConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'THING'|'THING_GROUP'|'THING_TYPE'|'THING_GROUP_MEMBERSHIP'|'THING_GROUP_HIERARCHY'|'THING_TYPE_ASSOCIATION'|'JOB'|'JOB_EXECUTION'|'POLICY'|'CERTIFICATE'|'CA_CERTIFICATE', Shapes\Configuration> $eventConfigurations
 */
class UpdateEventConfigurationsRequest extends Request
{
    /**
     * @param array{eventConfigurations?: array<'THING'|'THING_GROUP'|'THING_TYPE'|'THING_GROUP_MEMBERSHIP'|'THING_GROUP_HIERARCHY'|'THING_TYPE_ASSOCIATION'|'JOB'|'JOB_EXECUTION'|'POLICY'|'CERTIFICATE'|'CA_CERTIFICATE', Shapes\Configuration>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
