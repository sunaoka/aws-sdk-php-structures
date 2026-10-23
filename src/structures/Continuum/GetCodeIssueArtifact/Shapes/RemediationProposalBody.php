<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $patch
 * @property 'GIT_MAILBOX_PATCH'|'GIT_BINARY_DIFF'|'GIT_DIFF'|null $format
 * @property string|null $filename
 * @property string|null $patchSha256
 */
class RemediationProposalBody extends Shape
{
    /**
     * @param array{
     *     patch: string,
     *     format?: 'GIT_MAILBOX_PATCH'|'GIT_BINARY_DIFF'|'GIT_DIFF'|null,
     *     filename?: string|null,
     *     patchSha256?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
