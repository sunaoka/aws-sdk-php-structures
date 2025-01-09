<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property list<string> $securityGroupIds
 * @property list<string> $subnetIds
 */
class SecurityDetails extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     securityGroupIds: list<string>,
     *     subnetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
