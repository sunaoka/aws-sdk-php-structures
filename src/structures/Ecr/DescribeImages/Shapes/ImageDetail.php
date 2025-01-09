<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $imageDigest
 * @property list<string> $imageTags
 * @property int $imageSizeInBytes
 * @property \Aws\Api\DateTimeResult $imagePushedAt
 * @property ImageScanStatus $imageScanStatus
 * @property ImageScanFindingsSummary $imageScanFindingsSummary
 * @property string $imageManifestMediaType
 * @property string $artifactMediaType
 * @property \Aws\Api\DateTimeResult $lastRecordedPullTime
 */
class ImageDetail extends Shape
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName?: string,
     *     imageDigest?: string,
     *     imageTags?: list<string>,
     *     imageSizeInBytes?: int,
     *     imagePushedAt?: \Aws\Api\DateTimeResult,
     *     imageScanStatus?: ImageScanStatus,
     *     imageScanFindingsSummary?: ImageScanFindingsSummary,
     *     imageManifestMediaType?: string,
     *     artifactMediaType?: string,
     *     lastRecordedPullTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
