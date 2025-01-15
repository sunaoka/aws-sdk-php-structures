<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EVALUATION'|'LABELING_SET_GENERATION'|'IMPORT_LABELS'|'EXPORT_LABELS'|'FIND_MATCHES'|null $TaskType
 * @property ImportLabelsTaskRunProperties|null $ImportLabelsTaskRunProperties
 * @property ExportLabelsTaskRunProperties|null $ExportLabelsTaskRunProperties
 * @property LabelingSetGenerationTaskRunProperties|null $LabelingSetGenerationTaskRunProperties
 * @property FindMatchesTaskRunProperties|null $FindMatchesTaskRunProperties
 */
class TaskRunProperties extends Shape
{
    /**
     * @param array{
     *     TaskType?: 'EVALUATION'|'LABELING_SET_GENERATION'|'IMPORT_LABELS'|'EXPORT_LABELS'|'FIND_MATCHES'|null,
     *     ImportLabelsTaskRunProperties?: ImportLabelsTaskRunProperties|null,
     *     ExportLabelsTaskRunProperties?: ExportLabelsTaskRunProperties|null,
     *     LabelingSetGenerationTaskRunProperties?: LabelingSetGenerationTaskRunProperties|null,
     *     FindMatchesTaskRunProperties?: FindMatchesTaskRunProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
