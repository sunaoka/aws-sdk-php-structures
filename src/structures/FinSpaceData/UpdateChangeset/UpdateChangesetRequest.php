<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\UpdateChangeset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $datasetId
 * @property string $changesetId
 * @property array<string, string> $sourceParams
 * @property array<string, string> $formatParams
 */
class UpdateChangesetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     datasetId: string,
     *     changesetId: string,
     *     sourceParams: array<string, string>,
     *     formatParams: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
