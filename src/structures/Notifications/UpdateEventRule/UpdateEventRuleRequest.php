<?php

namespace Sunaoka\Aws\Structures\Notifications\UpdateEventRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $eventPattern
 * @property list<string>|null $regions
 */
class UpdateEventRuleRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     eventPattern?: string|null,
     *     regions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
