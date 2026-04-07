<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateCapacityManagerMonitoredTagKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ActivateTagKeys
 * @property list<string>|null $DeactivateTagKeys
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 */
class UpdateCapacityManagerMonitoredTagKeysRequest extends Request
{
    /**
     * @param array{
     *     ActivateTagKeys?: list<string>|null,
     *     DeactivateTagKeys?: list<string>|null,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
