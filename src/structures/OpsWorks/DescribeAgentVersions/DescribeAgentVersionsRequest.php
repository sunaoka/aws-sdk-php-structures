<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeAgentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackId
 * @property Shapes\StackConfigurationManager|null $ConfigurationManager
 */
class DescribeAgentVersionsRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     ConfigurationManager?: Shapes\StackConfigurationManager|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
