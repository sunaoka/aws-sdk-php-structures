<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteRemediationExceptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 * @property list<Shapes\RemediationExceptionResourceKey> $ResourceKeys
 */
class DeleteRemediationExceptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ResourceKeys: list<Shapes\RemediationExceptionResourceKey>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
