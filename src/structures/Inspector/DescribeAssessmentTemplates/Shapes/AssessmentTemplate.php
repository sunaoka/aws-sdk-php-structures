<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $assessmentTargetArn
 * @property int<180, 86400> $durationInSeconds
 * @property list<string> $rulesPackageArns
 * @property list<Attribute> $userAttributesForFindings
 * @property string $lastAssessmentRunArn
 * @property int $assessmentRunCount
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class AssessmentTemplate extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     assessmentTargetArn: string,
     *     durationInSeconds: int<180, 86400>,
     *     rulesPackageArns: list<string>,
     *     userAttributesForFindings: list<Attribute>,
     *     lastAssessmentRunArn?: string,
     *     assessmentRunCount: int,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
