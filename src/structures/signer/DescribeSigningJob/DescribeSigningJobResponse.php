<?php

namespace Sunaoka\Aws\Structures\signer\DescribeSigningJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property Shapes\Source $source
 * @property Shapes\SigningMaterial $signingMaterial
 * @property string $platformId
 * @property string $platformDisplayName
 * @property string $profileName
 * @property string $profileVersion
 * @property Shapes\SigningPlatformOverrides $overrides
 * @property array<string, string> $signingParameters
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $completedAt
 * @property \Aws\Api\DateTimeResult $signatureExpiresAt
 * @property string $requestedBy
 * @property 'InProgress'|'Failed'|'Succeeded' $status
 * @property string $statusReason
 * @property Shapes\SigningJobRevocationRecord $revocationRecord
 * @property Shapes\SignedObject $signedObject
 * @property string $jobOwner
 * @property string $jobInvoker
 */
class DescribeSigningJobResponse extends Response
{
}
