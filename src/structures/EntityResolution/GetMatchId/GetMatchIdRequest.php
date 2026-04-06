<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 * @property array<string, string> $record
 * @property bool|null $applyNormalization
 */
class GetMatchIdRequest extends Request
{
    /**
     * @param array{
     *     workflowName: string,
     *     record: array<string, string>,
     *     applyNormalization?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
