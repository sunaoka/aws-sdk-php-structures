<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property AWSAccount $awsAccount
 * @property AssessmentMetadata $metadata
 * @property AssessmentFramework $framework
 * @property array<string, string> $tags
 */
class Assessment extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     awsAccount?: AWSAccount,
     *     metadata?: AssessmentMetadata,
     *     framework?: AssessmentFramework,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
