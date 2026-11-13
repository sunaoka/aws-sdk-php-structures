<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DbInstanceIdentifier
 * @property string|null $DbClusterIdentifier
 * @property string|null $DbInstanceArn
 * @property string|null $DbiResourceId
 * @property string|null $Engine
 * @property string|null $EngineVersion
 */
class RdsDbInstance extends Shape
{
    /**
     * @param array{
     *     DbInstanceIdentifier?: string|null,
     *     DbClusterIdentifier?: string|null,
     *     DbInstanceArn?: string|null,
     *     DbiResourceId?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
