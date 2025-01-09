<?php

namespace Sunaoka\Aws\Structures\Ssm\GetExecutionPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'Mutating'|'NonMutating'|'Undetermined', int> $StepPreviews
 * @property list<string> $Regions
 * @property list<TargetPreview> $TargetPreviews
 * @property int $TotalAccounts
 */
class AutomationExecutionPreview extends Shape
{
    /**
     * @param array{
     *     StepPreviews?: array<'Mutating'|'NonMutating'|'Undetermined', int>,
     *     Regions?: list<string>,
     *     TargetPreviews?: list<TargetPreview>,
     *     TotalAccounts?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
