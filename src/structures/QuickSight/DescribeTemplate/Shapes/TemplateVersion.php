<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property list<TemplateError> $Errors
 * @property int<1, max> $VersionNumber
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $Status
 * @property list<DataSetConfiguration> $DataSetConfigurations
 * @property string $Description
 * @property string $SourceEntityArn
 * @property string $ThemeArn
 * @property list<Sheet> $Sheets
 */
class TemplateVersion extends Shape
{
    /**
     * @param array{
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     Errors?: list<TemplateError>,
     *     VersionNumber?: int<1, max>,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED',
     *     DataSetConfigurations?: list<DataSetConfiguration>,
     *     Description?: string,
     *     SourceEntityArn?: string,
     *     ThemeArn?: string,
     *     Sheets?: list<Sheet>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
