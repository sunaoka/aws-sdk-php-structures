<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableApplicationStatusCheckSuppression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $InstanceIds
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class DisableApplicationStatusCheckSuppressionRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
