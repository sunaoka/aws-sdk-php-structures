<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AwsSecurityFinding> $Findings
 */
class BatchImportFindingsRequest extends Request
{
    /**
     * @param array{Findings: list<Shapes\AwsSecurityFinding>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
