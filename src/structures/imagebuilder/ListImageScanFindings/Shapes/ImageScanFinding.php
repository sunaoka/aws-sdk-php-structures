<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsAccountId
 * @property string|null $imageBuildVersionArn
 * @property string|null $imagePipelineArn
 * @property string|null $type
 * @property string|null $description
 * @property string|null $title
 * @property Remediation|null $remediation
 * @property string|null $severity
 * @property \Aws\Api\DateTimeResult|null $firstObservedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property double|null $inspectorScore
 * @property InspectorScoreDetails|null $inspectorScoreDetails
 * @property PackageVulnerabilityDetails|null $packageVulnerabilityDetails
 * @property string|null $fixAvailable
 */
class ImageScanFinding extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string|null,
     *     imageBuildVersionArn?: string|null,
     *     imagePipelineArn?: string|null,
     *     type?: string|null,
     *     description?: string|null,
     *     title?: string|null,
     *     remediation?: Remediation|null,
     *     severity?: string|null,
     *     firstObservedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     inspectorScore?: double|null,
     *     inspectorScoreDetails?: InspectorScoreDetails|null,
     *     packageVulnerabilityDetails?: PackageVulnerabilityDetails|null,
     *     fixAvailable?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
