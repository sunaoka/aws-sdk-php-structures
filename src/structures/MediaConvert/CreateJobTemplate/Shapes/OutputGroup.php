<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedEncodingSettings $AutomatedEncodingSettings
 * @property string $CustomName
 * @property string $Name
 * @property OutputGroupSettings $OutputGroupSettings
 * @property list<Output> $Outputs
 */
class OutputGroup extends Shape
{
    /**
     * @param array{
     *     AutomatedEncodingSettings?: AutomatedEncodingSettings,
     *     CustomName?: string,
     *     Name?: string,
     *     OutputGroupSettings?: OutputGroupSettings,
     *     Outputs?: list<Output>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
