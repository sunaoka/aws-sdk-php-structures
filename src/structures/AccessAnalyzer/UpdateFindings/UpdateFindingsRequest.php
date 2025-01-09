<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\UpdateFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property 'ACTIVE'|'ARCHIVED' $status
 * @property list<string> $ids
 * @property string $resourceArn
 * @property string $clientToken
 */
class UpdateFindingsRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     status: 'ACTIVE'|'ARCHIVED',
     *     ids?: list<string>,
     *     resourceArn?: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
