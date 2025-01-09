<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeAgentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property Shapes\StackConfigurationManager $ConfigurationManager
 */
class DescribeAgentVersionsRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string,
     *     ConfigurationManager?: Shapes\StackConfigurationManager
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
