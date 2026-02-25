<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutAlarmMuteRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\Rule $Rule
 * @property Shapes\MuteTargets|null $MuteTargets
 * @property list<Shapes\Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $ExpireDate
 */
class PutAlarmMuteRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Rule: Shapes\Rule,
     *     MuteTargets?: Shapes\MuteTargets|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     ExpireDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
