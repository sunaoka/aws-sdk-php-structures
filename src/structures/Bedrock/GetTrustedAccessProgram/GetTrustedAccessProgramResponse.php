<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetTrustedAccessProgram;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\TrustedAccessResolutionContext $resolvedFor
 * @property 'inherit'|'enabled'|'disabled' $optIn
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetTrustedAccessProgramResponse extends Response
{
}
