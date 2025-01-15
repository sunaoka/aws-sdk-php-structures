<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property ActionTarget|null $NetworkAclId
 * @property list<EntryDescription>|null $NetworkAclEntriesToBeDeleted
 * @property bool|null $FMSCanRemediate
 */
class DeleteNetworkAclEntriesAction extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     NetworkAclId?: ActionTarget|null,
     *     NetworkAclEntriesToBeDeleted?: list<EntryDescription>|null,
     *     FMSCanRemediate?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
