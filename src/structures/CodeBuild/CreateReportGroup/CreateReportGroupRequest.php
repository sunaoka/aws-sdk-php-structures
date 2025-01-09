<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateReportGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'TEST'|'CODE_COVERAGE' $type
 * @property Shapes\ReportExportConfig $exportConfig
 * @property list<Shapes\Tag> $tags
 */
class CreateReportGroupRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     type: 'TEST'|'CODE_COVERAGE',
     *     exportConfig: Shapes\ReportExportConfig,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
