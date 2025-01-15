<?php

namespace Sunaoka\Aws\Structures\EKS\ListInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'UPGRADE_READINESS'>|null $categories
 * @property list<string>|null $kubernetesVersions
 * @property list<'PASSING'|'WARNING'|'ERROR'|'UNKNOWN'>|null $statuses
 */
class InsightsFilter extends Shape
{
    /**
     * @param array{
     *     categories?: list<'UPGRADE_READINESS'>|null,
     *     kubernetesVersions?: list<string>|null,
     *     statuses?: list<'PASSING'|'WARNING'|'ERROR'|'UNKNOWN'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
