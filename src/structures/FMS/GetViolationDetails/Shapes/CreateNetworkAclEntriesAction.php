<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property ActionTarget $NetworkAclId
 * @property list<EntryDescription> $NetworkAclEntriesToBeCreated
 * @property bool $FMSCanRemediate
 */
class CreateNetworkAclEntriesAction extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     NetworkAclId?: ActionTarget,
     *     NetworkAclEntriesToBeCreated?: list<EntryDescription>,
     *     FMSCanRemediate?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
