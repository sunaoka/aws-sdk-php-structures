<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string|null $displayName
 * @property string|null $documentationUrl
 * @property string|null $iconUrl
 * @property 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED'|null $status
 * @property string|null $statusMessage
 * @property string|null $workloadName
 */
class WorkloadData extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     displayName?: string|null,
     *     documentationUrl?: string|null,
     *     iconUrl?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED'|null,
     *     statusMessage?: string|null,
     *     workloadName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
