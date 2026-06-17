<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateThreatModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $threatModelId
 * @property string $agentSpaceId
 * @property string|null $title
 * @property string|null $description
 * @property Shapes\Assets|null $assets
 * @property list<Shapes\DocumentInfo>|null $scopeDocs
 * @property string|null $serviceRole
 * @property Shapes\CloudWatchLog|null $logConfig
 */
class UpdateThreatModelRequest extends Request
{
    /**
     * @param array{
     *     threatModelId: string,
     *     agentSpaceId: string,
     *     title?: string|null,
     *     description?: string|null,
     *     assets?: Shapes\Assets|null,
     *     scopeDocs?: list<Shapes\DocumentInfo>|null,
     *     serviceRole?: string|null,
     *     logConfig?: Shapes\CloudWatchLog|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
