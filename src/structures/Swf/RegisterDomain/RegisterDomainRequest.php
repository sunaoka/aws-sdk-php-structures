<?php

namespace Sunaoka\Aws\Structures\Swf\RegisterDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $workflowExecutionRetentionPeriodInDays
 * @property list<Shapes\ResourceTag> $tags
 */
class RegisterDomainRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     workflowExecutionRetentionPeriodInDays: string,
     *     tags?: list<Shapes\ResourceTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
