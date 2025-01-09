<?php

namespace Sunaoka\Aws\Structures\mgn\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImportTaskSummaryApplications $applications
 * @property ImportTaskSummaryServers $servers
 * @property ImportTaskSummaryWaves $waves
 */
class ImportTaskSummary extends Shape
{
    /**
     * @param array{
     *     applications?: ImportTaskSummaryApplications,
     *     servers?: ImportTaskSummaryServers,
     *     waves?: ImportTaskSummaryWaves
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
