<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationExceptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 * @property list<Shapes\RemediationExceptionResourceKey> $ResourceKeys
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 */
class PutRemediationExceptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ResourceKeys: list<Shapes\RemediationExceptionResourceKey>,
     *     Message?: string|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
