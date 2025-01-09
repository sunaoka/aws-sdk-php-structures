<?php

namespace Sunaoka\Aws\Structures\Waf\CreateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $MetricName
 * @property string $ChangeToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MetricName: string,
     *     ChangeToken: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
