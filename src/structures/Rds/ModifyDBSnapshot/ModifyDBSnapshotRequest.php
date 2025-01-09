<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSnapshotIdentifier
 * @property string $EngineVersion
 * @property string $OptionGroupName
 */
class ModifyDBSnapshotRequest extends Request
{
    /**
     * @param array{
     *     DBSnapshotIdentifier: string,
     *     EngineVersion?: string,
     *     OptionGroupName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
