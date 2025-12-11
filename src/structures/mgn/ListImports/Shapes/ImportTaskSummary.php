<?php

namespace Sunaoka\Aws\Structures\mgn\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImportTaskSummaryWaves|null $waves
 * @property ImportTaskSummaryApplications|null $applications
 * @property ImportTaskSummaryServers|null $servers
 */
class ImportTaskSummary extends Shape
{
    /**
     * @param array{
     *     waves?: ImportTaskSummaryWaves|null,
     *     applications?: ImportTaskSummaryApplications|null,
     *     servers?: ImportTaskSummaryServers|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
