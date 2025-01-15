<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteReportGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property bool|null $deleteReports
 */
class DeleteReportGroupRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     deleteReports?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
