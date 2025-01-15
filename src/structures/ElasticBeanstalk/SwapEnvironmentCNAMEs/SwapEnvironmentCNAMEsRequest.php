<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\SwapEnvironmentCNAMEs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceEnvironmentId
 * @property string|null $SourceEnvironmentName
 * @property string|null $DestinationEnvironmentId
 * @property string|null $DestinationEnvironmentName
 */
class SwapEnvironmentCNAMEsRequest extends Request
{
    /**
     * @param array{
     *     SourceEnvironmentId?: string|null,
     *     SourceEnvironmentName?: string|null,
     *     DestinationEnvironmentId?: string|null,
     *     DestinationEnvironmentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
