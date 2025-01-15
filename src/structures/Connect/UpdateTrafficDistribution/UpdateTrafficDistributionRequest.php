<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTrafficDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property Shapes\TelephonyConfig|null $TelephonyConfig
 * @property Shapes\SignInConfig|null $SignInConfig
 * @property Shapes\AgentConfig|null $AgentConfig
 */
class UpdateTrafficDistributionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     TelephonyConfig?: Shapes\TelephonyConfig|null,
     *     SignInConfig?: Shapes\SignInConfig|null,
     *     AgentConfig?: Shapes\AgentConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
