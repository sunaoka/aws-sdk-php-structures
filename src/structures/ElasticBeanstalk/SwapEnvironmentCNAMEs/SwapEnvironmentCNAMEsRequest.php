<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\SwapEnvironmentCNAMEs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceEnvironmentId
 * @property string $SourceEnvironmentName
 * @property string $DestinationEnvironmentId
 * @property string $DestinationEnvironmentName
 */
class SwapEnvironmentCNAMEsRequest extends Request
{
    /**
     * @param array{
     *     SourceEnvironmentId?: string,
     *     SourceEnvironmentName?: string,
     *     DestinationEnvironmentId?: string,
     *     DestinationEnvironmentName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
