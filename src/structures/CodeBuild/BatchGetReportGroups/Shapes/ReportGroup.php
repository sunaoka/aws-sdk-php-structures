<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReportGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'TEST'|'CODE_COVERAGE'|null $type
 * @property ReportExportConfig|null $exportConfig
 * @property \Aws\Api\DateTimeResult|null $created
 * @property \Aws\Api\DateTimeResult|null $lastModified
 * @property list<Tag>|null $tags
 * @property 'ACTIVE'|'DELETING'|null $status
 */
class ReportGroup extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     type?: 'TEST'|'CODE_COVERAGE'|null,
     *     exportConfig?: ReportExportConfig|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     lastModified?: \Aws\Api\DateTimeResult|null,
     *     tags?: list<Tag>|null,
     *     status?: 'ACTIVE'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
