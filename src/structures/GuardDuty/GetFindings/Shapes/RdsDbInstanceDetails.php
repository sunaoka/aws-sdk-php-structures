<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DbInstanceIdentifier
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $DbClusterIdentifier
 * @property string $DbInstanceArn
 * @property list<Tag> $Tags
 */
class RdsDbInstanceDetails extends Shape
{
    /**
     * @param array{
     *     DbInstanceIdentifier?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     DbClusterIdentifier?: string,
     *     DbInstanceArn?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
