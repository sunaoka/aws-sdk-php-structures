<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainArn
 * @property string $objectTypeArn
 */
class CustomerProfilesIntegrationConfig extends Shape
{
    /**
     * @param array{
     *     domainArn: string,
     *     objectTypeArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
