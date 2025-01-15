<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 * @property string $projectName
 * @property string|null $projectDescription
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     portalId: string,
     *     projectName: string,
     *     projectDescription?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
