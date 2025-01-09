<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property \Aws\Api\DateTimeResult $lastScannedAt
 * @property string $resourceId
 * @property ResourceScanMetadata $resourceMetadata
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION' $resourceType
 * @property 'EC2_SSM_AGENT_BASED'|'EC2_AGENTLESS' $scanMode
 * @property ScanStatus $scanStatus
 * @property 'NETWORK'|'PACKAGE'|'CODE' $scanType
 */
class CoveredResource extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     lastScannedAt?: \Aws\Api\DateTimeResult,
     *     resourceId: string,
     *     resourceMetadata?: ResourceScanMetadata,
     *     resourceType: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION',
     *     scanMode?: 'EC2_SSM_AGENT_BASED'|'EC2_AGENTLESS',
     *     scanStatus?: ScanStatus,
     *     scanType: 'NETWORK'|'PACKAGE'|'CODE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
