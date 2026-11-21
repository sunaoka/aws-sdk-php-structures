<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartTrustedAccessProgramAccountApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $enrollmentUrl
 * @property string $applicationToken
 * @property \Aws\Api\DateTimeResult $applicationTokenExpiresAt
 */
class TrustedAccessProgramProviderHandoff extends Shape
{
    /**
     * @param array{
     *     enrollmentUrl?: string|null,
     *     applicationToken: string,
     *     applicationTokenExpiresAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
