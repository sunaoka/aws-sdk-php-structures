<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyArn
 * @property string $dataSourceRoleArn
 * @property list<string> $dashboardViewerPrincipals
 * @property string $applicationArn
 * @property int $retentionDays
 */
class OpenSearchResourceConfig extends Shape
{
    /**
     * @param array{
     *     kmsKeyArn?: string,
     *     dataSourceRoleArn: string,
     *     dashboardViewerPrincipals: list<string>,
     *     applicationArn?: string,
     *     retentionDays: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
