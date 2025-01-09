<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property string $imageBuildVersionArn
 * @property string $imagePipelineArn
 * @property string $type
 * @property string $description
 * @property string $title
 * @property Remediation $remediation
 * @property string $severity
 * @property \Aws\Api\DateTimeResult $firstObservedAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property double $inspectorScore
 * @property InspectorScoreDetails $inspectorScoreDetails
 * @property PackageVulnerabilityDetails $packageVulnerabilityDetails
 * @property string $fixAvailable
 */
class ImageScanFinding extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string,
     *     imageBuildVersionArn?: string,
     *     imagePipelineArn?: string,
     *     type?: string,
     *     description?: string,
     *     title?: string,
     *     remediation?: Remediation,
     *     severity?: string,
     *     firstObservedAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     inspectorScore?: double,
     *     inspectorScoreDetails?: InspectorScoreDetails,
     *     packageVulnerabilityDetails?: PackageVulnerabilityDetails,
     *     fixAvailable?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
