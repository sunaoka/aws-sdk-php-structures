<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableApplicationStatusCheckSuppression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $InstanceIds
 * @property int|null $DurationSeconds
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class EnableApplicationStatusCheckSuppressionRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>|null,
     *     DurationSeconds?: int|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
