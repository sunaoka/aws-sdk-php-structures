<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUserWithIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DashboardId
 * @property string $SheetId
 * @property string $VisualId
 */
class DashboardVisualId extends Shape
{
    /**
     * @param array{
     *     DashboardId: string,
     *     SheetId: string,
     *     VisualId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
