<?php

namespace Sunaoka\Aws\Structures\Ssm\GetExecutionPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'Mutating'|'NonMutating'|'Undetermined', int>|null $StepPreviews
 * @property list<string>|null $Regions
 * @property list<TargetPreview>|null $TargetPreviews
 * @property int|null $TotalAccounts
 */
class AutomationExecutionPreview extends Shape
{
    /**
     * @param array{
     *     StepPreviews?: array<'Mutating'|'NonMutating'|'Undetermined', int>|null,
     *     Regions?: list<string>|null,
     *     TargetPreviews?: list<TargetPreview>|null,
     *     TotalAccounts?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
