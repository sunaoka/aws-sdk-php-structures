<?php

namespace Sunaoka\Aws\Structures\ConfigService\StartRemediationExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 * @property list<Shapes\ResourceKey> $ResourceKeys
 */
class StartRemediationExecutionRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ResourceKeys: list<Shapes\ResourceKey>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
