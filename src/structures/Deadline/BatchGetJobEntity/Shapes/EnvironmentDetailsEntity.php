<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property string $environmentId
 * @property string $schemaVersion
 * @property Document $template
 * @property list<string>|null $extensions
 * @property string|null $resolvedSymbolTable
 */
class EnvironmentDetailsEntity extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     environmentId: string,
     *     schemaVersion: string,
     *     template: Document,
     *     extensions?: list<string>|null,
     *     resolvedSymbolTable?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
