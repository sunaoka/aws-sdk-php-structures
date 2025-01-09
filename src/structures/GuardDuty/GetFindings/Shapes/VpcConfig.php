<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property string $VpcId
 * @property list<SecurityGroup> $SecurityGroups
 */
class VpcConfig extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>,
     *     VpcId?: string,
     *     SecurityGroups?: list<SecurityGroup>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
