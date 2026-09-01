<?php

namespace Sunaoka\Aws\Structures\Support\ResolveCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $caseId
 * @property bool|null $dryRun
 */
class ResolveCaseRequest extends Request
{
    /**
     * @param array{
     *     caseId?: string|null,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
