<?php

namespace Sunaoka\Aws\Structures\Connect\ResumeContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string $InstanceId
 * @property string|null $ContactFlowId
 */
class ResumeContactRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     InstanceId: string,
     *     ContactFlowId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
