<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property AWSAccount|null $awsAccount
 * @property AssessmentMetadata|null $metadata
 * @property AssessmentFramework|null $framework
 * @property array<string, string>|null $tags
 */
class Assessment extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     awsAccount?: AWSAccount|null,
     *     metadata?: AssessmentMetadata|null,
     *     framework?: AssessmentFramework|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
