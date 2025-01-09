<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property Source $source
 * @property SignedObject $signedObject
 * @property SigningMaterial $signingMaterial
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'InProgress'|'Failed'|'Succeeded' $status
 * @property bool $isRevoked
 * @property string $profileName
 * @property string $profileVersion
 * @property string $platformId
 * @property string $platformDisplayName
 * @property \Aws\Api\DateTimeResult $signatureExpiresAt
 * @property string $jobOwner
 * @property string $jobInvoker
 */
class SigningJob extends Shape
{
    /**
     * @param array{
     *     jobId?: string,
     *     source?: Source,
     *     signedObject?: SignedObject,
     *     signingMaterial?: SigningMaterial,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     status?: 'InProgress'|'Failed'|'Succeeded',
     *     isRevoked?: bool,
     *     profileName?: string,
     *     profileVersion?: string,
     *     platformId?: string,
     *     platformDisplayName?: string,
     *     signatureExpiresAt?: \Aws\Api\DateTimeResult,
     *     jobOwner?: string,
     *     jobInvoker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
