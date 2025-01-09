<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ExecuteAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TargetResource $targetResource
 * @property string $actionDefinitionId
 * @property Shapes\ActionPayload $actionPayload
 * @property string $clientToken
 */
class ExecuteActionRequest extends Request
{
    /**
     * @param array{
     *     targetResource: Shapes\TargetResource,
     *     actionDefinitionId: string,
     *     actionPayload: Shapes\ActionPayload,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
