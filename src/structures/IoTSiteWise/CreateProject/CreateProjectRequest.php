<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 * @property string $projectName
 * @property string $projectDescription
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     portalId: string,
     *     projectName: string,
     *     projectDescription?: string,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
