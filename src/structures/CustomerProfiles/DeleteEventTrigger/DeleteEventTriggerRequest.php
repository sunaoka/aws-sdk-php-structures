<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteEventTrigger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $EventTriggerName
 */
class DeleteEventTriggerRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     EventTriggerName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
