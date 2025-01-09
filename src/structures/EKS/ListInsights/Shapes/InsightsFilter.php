<?php

namespace Sunaoka\Aws\Structures\EKS\ListInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'UPGRADE_READINESS'> $categories
 * @property list<string> $kubernetesVersions
 * @property list<'PASSING'|'WARNING'|'ERROR'|'UNKNOWN'> $statuses
 */
class InsightsFilter extends Shape
{
    /**
     * @param array{
     *     categories?: list<'UPGRADE_READINESS'>,
     *     kubernetesVersions?: list<string>,
     *     statuses?: list<'PASSING'|'WARNING'|'ERROR'|'UNKNOWN'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
