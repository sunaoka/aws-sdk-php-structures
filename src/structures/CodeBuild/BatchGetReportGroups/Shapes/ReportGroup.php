<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReportGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property 'TEST'|'CODE_COVERAGE' $type
 * @property ReportExportConfig $exportConfig
 * @property \Aws\Api\DateTimeResult $created
 * @property \Aws\Api\DateTimeResult $lastModified
 * @property list<Tag> $tags
 * @property 'ACTIVE'|'DELETING' $status
 */
class ReportGroup extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     type?: 'TEST'|'CODE_COVERAGE',
     *     exportConfig?: ReportExportConfig,
     *     created?: \Aws\Api\DateTimeResult,
     *     lastModified?: \Aws\Api\DateTimeResult,
     *     tags?: list<Tag>,
     *     status?: 'ACTIVE'|'DELETING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
