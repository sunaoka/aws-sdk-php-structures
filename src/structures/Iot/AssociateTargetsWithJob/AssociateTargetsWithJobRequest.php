<?php

namespace Sunaoka\Aws\Structures\Iot\AssociateTargetsWithJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $targets
 * @property string $jobId
 * @property string|null $comment
 * @property string|null $namespaceId
 */
class AssociateTargetsWithJobRequest extends Request
{
    /**
     * @param array{
     *     targets: list<string>,
     *     jobId: string,
     *     comment?: string|null,
     *     namespaceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
