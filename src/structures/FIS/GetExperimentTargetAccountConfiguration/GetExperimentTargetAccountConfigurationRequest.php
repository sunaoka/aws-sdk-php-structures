<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperimentTargetAccountConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $experimentId
 * @property string $accountId
 */
class GetExperimentTargetAccountConfigurationRequest extends Request
{
    /**
     * @param array{
     *     experimentId: string,
     *     accountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
