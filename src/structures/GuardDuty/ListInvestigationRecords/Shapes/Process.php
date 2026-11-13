<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uuid
 * @property string|null $Name
 * @property string|null $Path
 * @property string|null $ParentUuid
 * @property list<FindingReference>|null $Findings
 */
class Process extends Shape
{
    /**
     * @param array{
     *     Uuid: string,
     *     Name?: string|null,
     *     Path?: string|null,
     *     ParentUuid?: string|null,
     *     Findings?: list<FindingReference>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
