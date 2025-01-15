<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedEncodingSettings|null $AutomatedEncodingSettings
 * @property string|null $CustomName
 * @property string|null $Name
 * @property OutputGroupSettings|null $OutputGroupSettings
 * @property list<Output>|null $Outputs
 */
class OutputGroup extends Shape
{
    /**
     * @param array{
     *     AutomatedEncodingSettings?: AutomatedEncodingSettings|null,
     *     CustomName?: string|null,
     *     Name?: string|null,
     *     OutputGroupSettings?: OutputGroupSettings|null,
     *     Outputs?: list<Output>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
