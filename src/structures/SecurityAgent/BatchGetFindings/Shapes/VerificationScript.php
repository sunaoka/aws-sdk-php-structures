<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scriptType
 * @property string|null $scriptUrl
 * @property string|null $instructions
 * @property list<VerificationScriptEnvVar>|null $envVars
 */
class VerificationScript extends Shape
{
    /**
     * @param array{
     *     scriptType?: string|null,
     *     scriptUrl?: string|null,
     *     instructions?: string|null,
     *     envVars?: list<VerificationScriptEnvVar>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
