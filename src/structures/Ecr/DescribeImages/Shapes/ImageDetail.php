<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property string|null $imageDigest
 * @property list<string>|null $imageTags
 * @property int|null $imageSizeInBytes
 * @property \Aws\Api\DateTimeResult|null $imagePushedAt
 * @property ImageScanStatus|null $imageScanStatus
 * @property ImageScanFindingsSummary|null $imageScanFindingsSummary
 * @property string|null $imageManifestMediaType
 * @property string|null $artifactMediaType
 * @property \Aws\Api\DateTimeResult|null $lastRecordedPullTime
 * @property string|null $subjectManifestDigest
 * @property 'ACTIVE'|'ARCHIVED'|'ACTIVATING'|null $imageStatus
 * @property \Aws\Api\DateTimeResult|null $lastArchivedAt
 * @property \Aws\Api\DateTimeResult|null $lastActivatedAt
 */
class ImageDetail extends Shape
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName?: string|null,
     *     imageDigest?: string|null,
     *     imageTags?: list<string>|null,
     *     imageSizeInBytes?: int|null,
     *     imagePushedAt?: \Aws\Api\DateTimeResult|null,
     *     imageScanStatus?: ImageScanStatus|null,
     *     imageScanFindingsSummary?: ImageScanFindingsSummary|null,
     *     imageManifestMediaType?: string|null,
     *     artifactMediaType?: string|null,
     *     lastRecordedPullTime?: \Aws\Api\DateTimeResult|null,
     *     subjectManifestDigest?: string|null,
     *     imageStatus?: 'ACTIVE'|'ARCHIVED'|'ACTIVATING'|null,
     *     lastArchivedAt?: \Aws\Api\DateTimeResult|null,
     *     lastActivatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
