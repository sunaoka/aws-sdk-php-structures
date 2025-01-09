<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteReportRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
