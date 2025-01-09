<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateTopicRuleDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property 'ENABLED'|'IN_PROGRESS'|'DISABLED'|'ERROR'|'DELETING' $status
 */
class UpdateTopicRuleDestinationRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     status: 'ENABLED'|'IN_PROGRESS'|'DISABLED'|'ERROR'|'DELETING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
