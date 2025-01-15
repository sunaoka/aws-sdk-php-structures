<?php

namespace Sunaoka\Aws\Structures\signer\DescribeSigningJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $jobId
 * @property Shapes\Source|null $source
 * @property Shapes\SigningMaterial|null $signingMaterial
 * @property string|null $platformId
 * @property string|null $platformDisplayName
 * @property string|null $profileName
 * @property string|null $profileVersion
 * @property Shapes\SigningPlatformOverrides|null $overrides
 * @property array<string, string>|null $signingParameters
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property \Aws\Api\DateTimeResult|null $signatureExpiresAt
 * @property string|null $requestedBy
 * @property 'InProgress'|'Failed'|'Succeeded'|null $status
 * @property string|null $statusReason
 * @property Shapes\SigningJobRevocationRecord|null $revocationRecord
 * @property Shapes\SignedObject|null $signedObject
 * @property string|null $jobOwner
 * @property string|null $jobInvoker
 */
class DescribeSigningJobResponse extends Response
{
}
