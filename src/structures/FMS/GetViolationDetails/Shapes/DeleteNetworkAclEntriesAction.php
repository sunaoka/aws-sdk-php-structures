<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property ActionTarget $NetworkAclId
 * @property list<EntryDescription> $NetworkAclEntriesToBeDeleted
 * @property bool $FMSCanRemediate
 */
class DeleteNetworkAclEntriesAction extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     NetworkAclId?: ActionTarget,
     *     NetworkAclEntriesToBeDeleted?: list<EntryDescription>,
     *     FMSCanRemediate?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
