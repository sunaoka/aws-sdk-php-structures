<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $applyNormalization
 * @property array<string, string> $record
 * @property string $workflowName
 */
class GetMatchIdRequest extends Request
{
    /**
     * @param array{
     *     applyNormalization?: bool,
     *     record: array<string, string>,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
