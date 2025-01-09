<?php

namespace Sunaoka\Aws\Structures\Notifications\UpdateEventRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $eventPattern
 * @property list<string> $regions
 */
class UpdateEventRuleRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     eventPattern?: string,
     *     regions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
