<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $environmentId
 * @property string $jobId
 * @property string $schemaVersion
 * @property Document $template
 */
class EnvironmentDetailsEntity extends Shape
{
    /**
     * @param array{
     *     environmentId: string,
     *     jobId: string,
     *     schemaVersion: string,
     *     template: Document
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
