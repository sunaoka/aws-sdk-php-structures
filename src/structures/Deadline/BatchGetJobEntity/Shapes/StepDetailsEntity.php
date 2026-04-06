<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property string $stepId
 * @property string $schemaVersion
 * @property Document $template
 * @property list<string> $dependencies
 */
class StepDetailsEntity extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     stepId: string,
     *     schemaVersion: string,
     *     template: Document,
     *     dependencies: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
