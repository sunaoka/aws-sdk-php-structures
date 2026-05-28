<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateDependency;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string $dependencyId
 * @property 'HARD'|'SOFT'|'UNKNOWN'|null $criticality
 * @property string|null $comment
 */
class UpdateDependencyRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     dependencyId: string,
     *     criticality?: 'HARD'|'SOFT'|'UNKNOWN'|null,
     *     comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
