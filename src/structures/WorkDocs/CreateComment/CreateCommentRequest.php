<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateComment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $DocumentId
 * @property string $VersionId
 * @property string $ParentId
 * @property string $ThreadId
 * @property string $Text
 * @property 'PUBLIC'|'PRIVATE' $Visibility
 * @property bool $NotifyCollaborators
 */
class CreateCommentRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     DocumentId: string,
     *     VersionId: string,
     *     ParentId?: string,
     *     ThreadId?: string,
     *     Text: string,
     *     Visibility?: 'PUBLIC'|'PRIVATE',
     *     NotifyCollaborators?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
