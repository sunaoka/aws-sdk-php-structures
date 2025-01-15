<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBClusterSnapshotAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterSnapshotIdentifier
 * @property string $AttributeName
 * @property list<string>|null $ValuesToAdd
 * @property list<string>|null $ValuesToRemove
 */
class ModifyDBClusterSnapshotAttributeRequest extends Request
{
    /**
     * @param array{
     *     DBClusterSnapshotIdentifier: string,
     *     AttributeName: string,
     *     ValuesToAdd?: list<string>|null,
     *     ValuesToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
