<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY' $resourceType
 * @property string $resourceId
 * @property string $accountId
 * @property 'NETWORK'|'PACKAGE'|'CODE' $scanType
 * @property ScanStatus|null $scanStatus
 * @property ResourceScanMetadata|null $resourceMetadata
 * @property \Aws\Api\DateTimeResult|null $lastScannedAt
 * @property 'EC2_SSM_AGENT_BASED'|'EC2_AGENTLESS'|null $scanMode
 */
class CoveredResource extends Shape
{
    /**
     * @param array{
     *     resourceType: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY',
     *     resourceId: string,
     *     accountId: string,
     *     scanType: 'NETWORK'|'PACKAGE'|'CODE',
     *     scanStatus?: ScanStatus|null,
     *     resourceMetadata?: ResourceScanMetadata|null,
     *     lastScannedAt?: \Aws\Api\DateTimeResult|null,
     *     scanMode?: 'EC2_SSM_AGENT_BASED'|'EC2_AGENTLESS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
