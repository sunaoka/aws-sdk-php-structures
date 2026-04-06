<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $dependencies
 * @property string $jobId
 * @property string $schemaVersion
 * @property string $stepId
 * @property Document $template
 */
class StepDetailsEntity extends Shape
{
    /**
     * @param array{
     *     dependencies: list<string>,
     *     jobId: string,
     *     schemaVersion: string,
     *     stepId: string,
     *     template: Document
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
