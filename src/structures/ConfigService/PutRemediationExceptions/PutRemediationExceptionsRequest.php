<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationExceptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 * @property list<Shapes\RemediationExceptionResourceKey> $ResourceKeys
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $ExpirationTime
 */
class PutRemediationExceptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ResourceKeys: list<Shapes\RemediationExceptionResourceKey>,
     *     Message?: string,
     *     ExpirationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
