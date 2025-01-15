<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ComposeEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationName
 * @property string|null $GroupName
 * @property list<string>|null $VersionLabels
 */
class ComposeEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName?: string|null,
     *     GroupName?: string|null,
     *     VersionLabels?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
