<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateSipRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipRuleId
 * @property string $Name
 * @property bool $Disabled
 * @property list<Shapes\SipRuleTargetApplication> $TargetApplications
 */
class UpdateSipRuleRequest extends Request
{
    /**
     * @param array{
     *     SipRuleId: string,
     *     Name: string,
     *     Disabled?: bool,
     *     TargetApplications?: list<Shapes\SipRuleTargetApplication>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
