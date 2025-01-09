<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTrafficDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property Shapes\TelephonyConfig $TelephonyConfig
 * @property Shapes\SignInConfig $SignInConfig
 * @property Shapes\AgentConfig $AgentConfig
 */
class UpdateTrafficDistributionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     TelephonyConfig?: Shapes\TelephonyConfig,
     *     SignInConfig?: Shapes\SignInConfig,
     *     AgentConfig?: Shapes\AgentConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
