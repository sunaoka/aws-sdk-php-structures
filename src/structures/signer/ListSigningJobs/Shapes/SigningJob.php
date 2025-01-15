<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobId
 * @property Source|null $source
 * @property SignedObject|null $signedObject
 * @property SigningMaterial|null $signingMaterial
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'InProgress'|'Failed'|'Succeeded'|null $status
 * @property bool|null $isRevoked
 * @property string|null $profileName
 * @property string|null $profileVersion
 * @property string|null $platformId
 * @property string|null $platformDisplayName
 * @property \Aws\Api\DateTimeResult|null $signatureExpiresAt
 * @property string|null $jobOwner
 * @property string|null $jobInvoker
 */
class SigningJob extends Shape
{
    /**
     * @param array{
     *     jobId?: string|null,
     *     source?: Source|null,
     *     signedObject?: SignedObject|null,
     *     signingMaterial?: SigningMaterial|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'InProgress'|'Failed'|'Succeeded'|null,
     *     isRevoked?: bool|null,
     *     profileName?: string|null,
     *     profileVersion?: string|null,
     *     platformId?: string|null,
     *     platformDisplayName?: string|null,
     *     signatureExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     jobOwner?: string|null,
     *     jobInvoker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
