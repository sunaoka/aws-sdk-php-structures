<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeConfigurationRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationId
 * @property string $ConfigurationRevision
 */
class DescribeConfigurationRevisionRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationId: string,
     *     ConfigurationRevision: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
