<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBSnapshotAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSnapshotIdentifier
 * @property string $AttributeName
 * @property list<string>|null $ValuesToAdd
 * @property list<string>|null $ValuesToRemove
 */
class ModifyDBSnapshotAttributeRequest extends Request
{
    /**
     * @param array{
     *     DBSnapshotIdentifier: string,
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
