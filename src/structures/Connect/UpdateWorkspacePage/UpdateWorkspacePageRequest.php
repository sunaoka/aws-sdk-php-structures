<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateWorkspacePage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $WorkspaceId
 * @property string $Page
 * @property string|null $NewPage
 * @property string|null $ResourceArn
 * @property string|null $Slug
 * @property string|null $InputData
 */
class UpdateWorkspacePageRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     WorkspaceId: string,
     *     Page: string,
     *     NewPage?: string|null,
     *     ResourceArn?: string|null,
     *     Slug?: string|null,
     *     InputData?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
