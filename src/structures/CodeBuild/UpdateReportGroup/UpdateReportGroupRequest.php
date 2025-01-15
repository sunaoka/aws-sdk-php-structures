<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateReportGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property Shapes\ReportExportConfig|null $exportConfig
 * @property list<Shapes\Tag>|null $tags
 */
class UpdateReportGroupRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     exportConfig?: Shapes\ReportExportConfig|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
