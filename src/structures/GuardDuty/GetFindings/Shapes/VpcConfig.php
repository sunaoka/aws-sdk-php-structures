<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SubnetIds
 * @property string|null $VpcId
 * @property list<SecurityGroup>|null $SecurityGroups
 */
class VpcConfig extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>|null,
     *     VpcId?: string|null,
     *     SecurityGroups?: list<SecurityGroup>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
