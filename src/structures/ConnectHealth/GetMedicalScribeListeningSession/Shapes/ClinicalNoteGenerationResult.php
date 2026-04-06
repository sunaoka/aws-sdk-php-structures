<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArtifactDetails|null $noteResult
 * @property ArtifactDetails|null $transcriptResult
 * @property ArtifactDetails|null $afterVisitSummaryResult
 */
class ClinicalNoteGenerationResult extends Shape
{
    /**
     * @param array{
     *     noteResult?: ArtifactDetails|null,
     *     transcriptResult?: ArtifactDetails|null,
     *     afterVisitSummaryResult?: ArtifactDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
