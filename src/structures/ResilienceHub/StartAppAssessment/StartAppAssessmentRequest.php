<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartAppAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property string $assessmentName
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class StartAppAssessmentRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string,
     *     assessmentName: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
