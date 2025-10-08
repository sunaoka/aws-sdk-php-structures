<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GenerateMatchId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 * @property list<Shapes\Record> $records
 * @property 'CONSISTENT'|'EVENTUAL'|'EVENTUAL_NO_LOOKUP'|null $processingType
 */
class GenerateMatchIdRequest extends Request
{
    /**
     * @param array{
     *     workflowName: string,
     *     records: list<Shapes\Record>,
     *     processingType?: 'CONSISTENT'|'EVENTUAL'|'EVENTUAL_NO_LOOKUP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
