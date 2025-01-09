<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\BatchGetFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\FindingIdentifier> $findingIdentifiers
 */
class BatchGetFindingsRequest extends Request
{
    /**
     * @param array{findingIdentifiers: list<Shapes\FindingIdentifier>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
