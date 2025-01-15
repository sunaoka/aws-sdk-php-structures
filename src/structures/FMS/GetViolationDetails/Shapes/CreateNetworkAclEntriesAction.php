<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property ActionTarget|null $NetworkAclId
 * @property list<EntryDescription>|null $NetworkAclEntriesToBeCreated
 * @property bool|null $FMSCanRemediate
 */
class CreateNetworkAclEntriesAction extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     NetworkAclId?: ActionTarget|null,
     *     NetworkAclEntriesToBeCreated?: list<EntryDescription>|null,
     *     FMSCanRemediate?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
