<?php

namespace Sunaoka\Aws\Structures\Waf\CreateRateBasedRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $MetricName
 * @property 'IP' $RateKey
 * @property int<100, 2000000000> $RateLimit
 * @property string $ChangeToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateRateBasedRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MetricName: string,
     *     RateKey: 'IP',
     *     RateLimit: int<100, 2000000000>,
     *     ChangeToken: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
