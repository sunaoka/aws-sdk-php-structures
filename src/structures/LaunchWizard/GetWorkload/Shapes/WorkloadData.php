<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $workloadName
 * @property string|null $displayName
 * @property 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED'|null $status
 * @property string|null $description
 * @property string|null $documentationUrl
 * @property string|null $iconUrl
 * @property string|null $statusMessage
 */
class WorkloadData extends Shape
{
    /**
     * @param array{
     *     workloadName?: string|null,
     *     displayName?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED'|null,
     *     description?: string|null,
     *     documentationUrl?: string|null,
     *     iconUrl?: string|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
