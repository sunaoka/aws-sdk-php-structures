<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateFailureModeFinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $findingId
 * @property 'OPEN'|'RESOLVED'|'IRRELEVANT' $status
 * @property string $serviceArn
 * @property string|null $comment
 */
class UpdateFailureModeFindingRequest extends Request
{
    /**
     * @param array{
     *     findingId: string,
     *     status: 'OPEN'|'RESOLVED'|'IRRELEVANT',
     *     serviceArn: string,
     *     comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
