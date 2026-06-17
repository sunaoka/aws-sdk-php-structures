<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateThreatModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $title
 * @property string $agentSpaceId
 * @property string|null $description
 * @property Shapes\Assets|null $assets
 * @property list<Shapes\DocumentInfo>|null $scopeDocs
 * @property string $serviceRole
 * @property Shapes\CloudWatchLog|null $logConfig
 * @property Shapes\ReportDestination|null $reportDestination
 */
class CreateThreatModelRequest extends Request
{
    /**
     * @param array{
     *     title: string,
     *     agentSpaceId: string,
     *     description?: string|null,
     *     assets?: Shapes\Assets|null,
     *     scopeDocs?: list<Shapes\DocumentInfo>|null,
     *     serviceRole: string,
     *     logConfig?: Shapes\CloudWatchLog|null,
     *     reportDestination?: Shapes\ReportDestination|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
