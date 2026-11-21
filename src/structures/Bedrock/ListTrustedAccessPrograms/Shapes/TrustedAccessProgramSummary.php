<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListTrustedAccessPrograms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $programId
 * @property string $name
 * @property string $description
 * @property string $providerName
 * @property string $detailsUrl
 * @property string|null $enrollmentUrl
 * @property 'requestable'|'eligible'|'enabled'|'disabled'|'revoked' $status
 * @property string|null $statusReason
 * @property 'organization'|'account'|'project'|'program_default' $source
 * @property 'organization'|'account'|'project'|'program_default'|null $eligibilityScope
 * @property TrustedAccessResolutionContext $resolvedFor
 * @property 'inherit'|'enabled'|'disabled' $optIn
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class TrustedAccessProgramSummary extends Shape
{
    /**
     * @param array{
     *     programId: string,
     *     name: string,
     *     description: string,
     *     providerName: string,
     *     detailsUrl: string,
     *     enrollmentUrl?: string|null,
     *     status: 'requestable'|'eligible'|'enabled'|'disabled'|'revoked',
     *     statusReason?: string|null,
     *     source: 'organization'|'account'|'project'|'program_default',
     *     eligibilityScope?: 'organization'|'account'|'project'|'program_default'|null,
     *     resolvedFor: TrustedAccessResolutionContext,
     *     optIn: 'inherit'|'enabled'|'disabled',
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
