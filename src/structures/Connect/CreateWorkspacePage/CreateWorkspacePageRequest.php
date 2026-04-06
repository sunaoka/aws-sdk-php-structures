<?php

namespace Sunaoka\Aws\Structures\Connect\CreateWorkspacePage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $WorkspaceId
 * @property string $ResourceArn
 * @property string $Page
 * @property string|null $Slug
 * @property string|null $InputData
 */
class CreateWorkspacePageRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     WorkspaceId: string,
     *     ResourceArn: string,
     *     Page: string,
     *     Slug?: string|null,
     *     InputData?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
