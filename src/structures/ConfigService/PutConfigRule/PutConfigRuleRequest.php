<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConfigRule $ConfigRule
 * @property list<Shapes\Tag>|null $Tags
 */
class PutConfigRuleRequest extends Request
{
    /**
     * @param array{
     *     ConfigRule: Shapes\ConfigRule,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
