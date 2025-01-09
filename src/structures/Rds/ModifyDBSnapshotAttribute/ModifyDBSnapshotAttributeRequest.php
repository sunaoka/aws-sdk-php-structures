<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBSnapshotAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSnapshotIdentifier
 * @property string $AttributeName
 * @property list<string> $ValuesToAdd
 * @property list<string> $ValuesToRemove
 */
class ModifyDBSnapshotAttributeRequest extends Request
{
    /**
     * @param array{
     *     DBSnapshotIdentifier: string,
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
