<?php

namespace Sunaoka\Aws\Structures\drs\StartRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $recoverySnapshotID
 * @property string $sourceServerID
 */
class StartRecoveryRequestSourceServer extends Shape
{
    /**
     * @param array{
     *     recoverySnapshotID?: string|null,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
