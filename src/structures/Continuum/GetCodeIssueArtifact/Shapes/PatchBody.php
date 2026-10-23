<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $patch
 * @property 'GIT_MAILBOX_PATCH'|'GIT_BINARY_DIFF'|'GIT_DIFF'|null $format
 * @property string|null $repositoryName
 * @property string $patchSha256
 * @property int $sizeBytes
 * @property PatchDelivery|null $delivery
 */
class PatchBody extends Shape
{
    /**
     * @param array{
     *     patch: string,
     *     format?: 'GIT_MAILBOX_PATCH'|'GIT_BINARY_DIFF'|'GIT_DIFF'|null,
     *     repositoryName?: string|null,
     *     patchSha256: string,
     *     sizeBytes: int,
     *     delivery?: PatchDelivery|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
