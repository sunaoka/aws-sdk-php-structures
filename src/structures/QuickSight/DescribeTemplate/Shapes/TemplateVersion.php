<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property list<TemplateError>|null $Errors
 * @property int<1, max>|null $VersionNumber
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $Status
 * @property list<DataSetConfiguration>|null $DataSetConfigurations
 * @property string|null $Description
 * @property string|null $SourceEntityArn
 * @property string|null $ThemeArn
 * @property list<Sheet>|null $Sheets
 */
class TemplateVersion extends Shape
{
    /**
     * @param array{
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     Errors?: list<TemplateError>|null,
     *     VersionNumber?: int<1, max>|null,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null,
     *     DataSetConfigurations?: list<DataSetConfiguration>|null,
     *     Description?: string|null,
     *     SourceEntityArn?: string|null,
     *     ThemeArn?: string|null,
     *     Sheets?: list<Sheet>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
