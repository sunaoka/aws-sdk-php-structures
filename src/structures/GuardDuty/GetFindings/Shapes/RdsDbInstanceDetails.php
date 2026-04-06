<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DbInstanceIdentifier
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $DbClusterIdentifier
 * @property string|null $DbInstanceArn
 * @property string|null $DbiResourceId
 * @property list<Tag>|null $Tags
 */
class RdsDbInstanceDetails extends Shape
{
    /**
     * @param array{
     *     DbInstanceIdentifier?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     DbClusterIdentifier?: string|null,
     *     DbInstanceArn?: string|null,
     *     DbiResourceId?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
