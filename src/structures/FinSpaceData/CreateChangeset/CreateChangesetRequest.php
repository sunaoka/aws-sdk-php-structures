<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateChangeset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $datasetId
 * @property 'REPLACE'|'APPEND'|'MODIFY' $changeType
 * @property array<string, string> $sourceParams
 * @property array<string, string> $formatParams
 */
class CreateChangesetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     datasetId: string,
     *     changeType: 'REPLACE'|'APPEND'|'MODIFY',
     *     sourceParams: array<string, string>,
     *     formatParams: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
