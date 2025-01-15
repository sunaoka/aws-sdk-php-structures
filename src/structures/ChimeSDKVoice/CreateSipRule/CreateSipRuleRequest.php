<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateSipRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'ToPhoneNumber'|'RequestUriHostname' $TriggerType
 * @property string $TriggerValue
 * @property bool|null $Disabled
 * @property list<Shapes\SipRuleTargetApplication>|null $TargetApplications
 */
class CreateSipRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     TriggerType: 'ToPhoneNumber'|'RequestUriHostname',
     *     TriggerValue: string,
     *     Disabled?: bool|null,
     *     TargetApplications?: list<Shapes\SipRuleTargetApplication>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
