<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $instanceId
 * @property list<string>|null $authScopes
 */
class ServiceNowConfiguration extends Shape
{
    /**
     * @param array{
     *     instanceId?: string|null,
     *     authScopes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
