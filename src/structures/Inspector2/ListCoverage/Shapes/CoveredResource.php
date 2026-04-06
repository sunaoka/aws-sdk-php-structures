<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property \Aws\Api\DateTimeResult|null $lastScannedAt
 * @property string $resourceId
 * @property ResourceScanMetadata|null $resourceMetadata
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION' $resourceType
 * @property ScanStatus|null $scanStatus
 * @property 'NETWORK'|'PACKAGE'|'CODE' $scanType
 */
class CoveredResource extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     lastScannedAt?: \Aws\Api\DateTimeResult|null,
     *     resourceId: string,
     *     resourceMetadata?: ResourceScanMetadata|null,
     *     resourceType: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION',
     *     scanStatus?: ScanStatus|null,
     *     scanType: 'NETWORK'|'PACKAGE'|'CODE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
