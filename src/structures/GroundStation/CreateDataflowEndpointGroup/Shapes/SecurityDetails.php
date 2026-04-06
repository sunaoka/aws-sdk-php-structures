<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 * @property string $roleArn
 */
class SecurityDetails extends Shape
{
    /**
     * @param array{
     *     subnetIds: list<string>,
     *     securityGroupIds: list<string>,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
