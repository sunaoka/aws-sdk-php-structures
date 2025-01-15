<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSnapshotIdentifier
 * @property string|null $EngineVersion
 * @property string|null $OptionGroupName
 */
class ModifyDBSnapshotRequest extends Request
{
    /**
     * @param array{
     *     DBSnapshotIdentifier: string,
     *     EngineVersion?: string|null,
     *     OptionGroupName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
