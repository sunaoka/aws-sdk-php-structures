<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactTaskTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $TaskTemplateId
 * @property string $ContactId
 */
class UpdateContactTaskTemplateRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TaskTemplateId: string,
     *     ContactId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
