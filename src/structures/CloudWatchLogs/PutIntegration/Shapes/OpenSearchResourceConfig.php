<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyArn
 * @property string $dataSourceRoleArn
 * @property list<string> $dashboardViewerPrincipals
 * @property string|null $applicationArn
 * @property int<1, 30> $retentionDays
 */
class OpenSearchResourceConfig extends Shape
{
    /**
     * @param array{
     *     kmsKeyArn?: string|null,
     *     dataSourceRoleArn: string,
     *     dashboardViewerPrincipals: list<string>,
     *     applicationArn?: string|null,
     *     retentionDays: int<1, 30>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
