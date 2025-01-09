<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EVALUATION'|'LABELING_SET_GENERATION'|'IMPORT_LABELS'|'EXPORT_LABELS'|'FIND_MATCHES' $TaskType
 * @property ImportLabelsTaskRunProperties $ImportLabelsTaskRunProperties
 * @property ExportLabelsTaskRunProperties $ExportLabelsTaskRunProperties
 * @property LabelingSetGenerationTaskRunProperties $LabelingSetGenerationTaskRunProperties
 * @property FindMatchesTaskRunProperties $FindMatchesTaskRunProperties
 */
class TaskRunProperties extends Shape
{
    /**
     * @param array{
     *     TaskType?: 'EVALUATION'|'LABELING_SET_GENERATION'|'IMPORT_LABELS'|'EXPORT_LABELS'|'FIND_MATCHES',
     *     ImportLabelsTaskRunProperties?: ImportLabelsTaskRunProperties,
     *     ExportLabelsTaskRunProperties?: ExportLabelsTaskRunProperties,
     *     LabelingSetGenerationTaskRunProperties?: LabelingSetGenerationTaskRunProperties,
     *     FindMatchesTaskRunProperties?: FindMatchesTaskRunProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
