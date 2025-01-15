<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateSipRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipRuleId
 * @property string $Name
 * @property bool|null $Disabled
 * @property list<Shapes\SipRuleTargetApplication>|null $TargetApplications
 */
class UpdateSipRuleRequest extends Request
{
    /**
     * @param array{
     *     SipRuleId: string,
     *     Name: string,
     *     Disabled?: bool|null,
     *     TargetApplications?: list<Shapes\SipRuleTargetApplication>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
