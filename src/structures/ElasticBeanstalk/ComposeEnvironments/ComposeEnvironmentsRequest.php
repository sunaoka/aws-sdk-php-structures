<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ComposeEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $GroupName
 * @property list<string> $VersionLabels
 */
class ComposeEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName?: string,
     *     GroupName?: string,
     *     VersionLabels?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
