<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsSecurityFindingIdentifier $FindingIdentifier
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class BatchUpdateFindingsUnprocessedFinding extends Shape
{
    /**
     * @param array{
     *     FindingIdentifier: AwsSecurityFindingIdentifier,
     *     ErrorCode: string,
     *     ErrorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
