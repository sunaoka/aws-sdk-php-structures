<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string $projectName
 * @property string $projectDescription
 * @property string $clientToken
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     projectName: string,
     *     projectDescription?: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
