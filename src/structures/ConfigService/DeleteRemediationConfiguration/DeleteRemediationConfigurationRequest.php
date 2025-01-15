<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteRemediationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 * @property string|null $ResourceType
 */
class DeleteRemediationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ResourceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
