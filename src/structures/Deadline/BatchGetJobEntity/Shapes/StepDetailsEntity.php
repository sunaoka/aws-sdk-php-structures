<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property string $stepId
 * @property string $schemaVersion
 * @property Document $template
 * @property list<string> $dependencies
 * @property list<string>|null $extensions
 * @property string|null $resolvedSymbolTable
 */
class StepDetailsEntity extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     stepId: string,
     *     schemaVersion: string,
     *     template: Document,
     *     dependencies: list<string>,
     *     extensions?: list<string>|null,
     *     resolvedSymbolTable?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
