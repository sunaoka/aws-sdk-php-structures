<?php

namespace Sunaoka\Aws\Structures\Swf\RegisterDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $workflowExecutionRetentionPeriodInDays
 * @property list<Shapes\ResourceTag>|null $tags
 */
class RegisterDomainRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     workflowExecutionRetentionPeriodInDays: string,
     *     tags?: list<Shapes\ResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
