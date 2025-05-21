<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsAccountId
 * @property string|null $description
 * @property string|null $findingArn
 * @property \Aws\Api\DateTimeResult|null $firstObservedAt
 * @property \Aws\Api\DateTimeResult|null $lastObservedAt
 * @property PackageVulnerabilityDetails|null $packageVulnerabilityDetails
 * @property Remediation|null $remediation
 * @property list<ResourceShape>|null $resources
 * @property double|null $score
 * @property ScoreDetails|null $scoreDetails
 * @property string|null $severity
 * @property string|null $status
 * @property string|null $title
 * @property string|null $type
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $fixAvailable
 * @property string|null $exploitAvailable
 */
class EnhancedImageScanFinding extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string|null,
     *     description?: string|null,
     *     findingArn?: string|null,
     *     firstObservedAt?: \Aws\Api\DateTimeResult|null,
     *     lastObservedAt?: \Aws\Api\DateTimeResult|null,
     *     packageVulnerabilityDetails?: PackageVulnerabilityDetails|null,
     *     remediation?: Remediation|null,
     *     resources?: list<ResourceShape>|null,
     *     score?: double|null,
     *     scoreDetails?: ScoreDetails|null,
     *     severity?: string|null,
     *     status?: string|null,
     *     title?: string|null,
     *     type?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     fixAvailable?: string|null,
     *     exploitAvailable?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
