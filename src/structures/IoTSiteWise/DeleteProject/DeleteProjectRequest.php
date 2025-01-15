<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string|null $clientToken
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
