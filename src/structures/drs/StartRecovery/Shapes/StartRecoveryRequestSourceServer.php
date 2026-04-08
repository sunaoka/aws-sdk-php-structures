<?php

namespace Sunaoka\Aws\Structures\drs\StartRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceServerID
 * @property string|null $recoverySnapshotID
 */
class StartRecoveryRequestSourceServer extends Shape
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     recoverySnapshotID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
