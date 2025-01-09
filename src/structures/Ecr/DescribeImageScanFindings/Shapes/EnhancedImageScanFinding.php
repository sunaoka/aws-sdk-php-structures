<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property string $description
 * @property string $findingArn
 * @property \Aws\Api\DateTimeResult $firstObservedAt
 * @property \Aws\Api\DateTimeResult $lastObservedAt
 * @property PackageVulnerabilityDetails $packageVulnerabilityDetails
 * @property Remediation $remediation
 * @property list<Resource> $resources
 * @property double $score
 * @property ScoreDetails $scoreDetails
 * @property string $severity
 * @property string $status
 * @property string $title
 * @property string $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $fixAvailable
 * @property string $exploitAvailable
 */
class EnhancedImageScanFinding extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string,
     *     description?: string,
     *     findingArn?: string,
     *     firstObservedAt?: \Aws\Api\DateTimeResult,
     *     lastObservedAt?: \Aws\Api\DateTimeResult,
     *     packageVulnerabilityDetails?: PackageVulnerabilityDetails,
     *     remediation?: Remediation,
     *     resources?: list<Resource>,
     *     score?: double,
     *     scoreDetails?: ScoreDetails,
     *     severity?: string,
     *     status?: string,
     *     title?: string,
     *     type?: string,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     fixAvailable?: string,
     *     exploitAvailable?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
