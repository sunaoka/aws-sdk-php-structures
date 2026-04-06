<?php

namespace Sunaoka\Aws\Structures\mgn\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImportTaskSummaryApplications|null $applications
 * @property ImportTaskSummaryServers|null $servers
 * @property ImportTaskSummaryWaves|null $waves
 */
class ImportTaskSummary extends Shape
{
    /**
     * @param array{
     *     applications?: ImportTaskSummaryApplications|null,
     *     servers?: ImportTaskSummaryServers|null,
     *     waves?: ImportTaskSummaryWaves|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
