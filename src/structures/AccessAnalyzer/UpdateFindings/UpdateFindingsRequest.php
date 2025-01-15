<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\UpdateFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property 'ACTIVE'|'ARCHIVED' $status
 * @property list<string>|null $ids
 * @property string|null $resourceArn
 * @property string|null $clientToken
 */
class UpdateFindingsRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     status: 'ACTIVE'|'ARCHIVED',
     *     ids?: list<string>|null,
     *     resourceArn?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
