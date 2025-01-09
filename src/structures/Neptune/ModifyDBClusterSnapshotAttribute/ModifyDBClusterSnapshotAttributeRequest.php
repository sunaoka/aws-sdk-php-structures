<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBClusterSnapshotAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterSnapshotIdentifier
 * @property string $AttributeName
 * @property list<string> $ValuesToAdd
 * @property list<string> $ValuesToRemove
 */
class ModifyDBClusterSnapshotAttributeRequest extends Request
{
    /**
     * @param array{
     *     DBClusterSnapshotIdentifier: string,
     *     AttributeName: string,
     *     ValuesToAdd?: list<string>,
     *     ValuesToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
