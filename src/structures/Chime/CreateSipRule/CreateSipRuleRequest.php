<?php

namespace Sunaoka\Aws\Structures\Chime\CreateSipRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'ToPhoneNumber'|'RequestUriHostname' $TriggerType
 * @property string $TriggerValue
 * @property bool $Disabled
 * @property list<Shapes\SipRuleTargetApplication> $TargetApplications
 */
class CreateSipRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     TriggerType: 'ToPhoneNumber'|'RequestUriHostname',
     *     TriggerValue: string,
     *     Disabled?: bool,
     *     TargetApplications: list<Shapes\SipRuleTargetApplication>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
