<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateComment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $DocumentId
 * @property string $VersionId
 * @property string|null $ParentId
 * @property string|null $ThreadId
 * @property string $Text
 * @property 'PUBLIC'|'PRIVATE'|null $Visibility
 * @property bool|null $NotifyCollaborators
 */
class CreateCommentRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     DocumentId: string,
     *     VersionId: string,
     *     ParentId?: string|null,
     *     ThreadId?: string|null,
     *     Text: string,
     *     Visibility?: 'PUBLIC'|'PRIVATE'|null,
     *     NotifyCollaborators?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
