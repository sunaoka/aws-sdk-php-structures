<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperimentTargetAccountConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $experimentId
 * @property string $nextToken
 */
class ListExperimentTargetAccountConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     experimentId: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
