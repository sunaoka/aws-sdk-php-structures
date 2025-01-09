<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateReportGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property Shapes\ReportExportConfig $exportConfig
 * @property list<Shapes\Tag> $tags
 */
class UpdateReportGroupRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     exportConfig?: Shapes\ReportExportConfig,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
