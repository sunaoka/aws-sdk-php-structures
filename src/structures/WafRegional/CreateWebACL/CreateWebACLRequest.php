<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $MetricName
 * @property Shapes\WafAction $DefaultAction
 * @property string $ChangeToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateWebACLRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MetricName: string,
     *     DefaultAction: Shapes\WafAction,
     *     ChangeToken: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
