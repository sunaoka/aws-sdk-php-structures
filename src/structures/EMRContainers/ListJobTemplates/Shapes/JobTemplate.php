<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $id
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property array<string, string>|null $tags
 * @property JobTemplateData $jobTemplateData
 * @property string|null $kmsKeyArn
 * @property string|null $decryptionError
 */
class JobTemplate extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     id?: string|null,
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     tags?: array<string, string>|null,
     *     jobTemplateData: JobTemplateData,
     *     kmsKeyArn?: string|null,
     *     decryptionError?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
