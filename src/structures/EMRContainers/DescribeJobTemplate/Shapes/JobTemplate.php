<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property array<string, string> $tags
 * @property JobTemplateData $jobTemplateData
 * @property string $kmsKeyArn
 * @property string $decryptionError
 */
class JobTemplate extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     id?: string,
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     tags?: array<string, string>,
     *     jobTemplateData: JobTemplateData,
     *     kmsKeyArn?: string,
     *     decryptionError?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
