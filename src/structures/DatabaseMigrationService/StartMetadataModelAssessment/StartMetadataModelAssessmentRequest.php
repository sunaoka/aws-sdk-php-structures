<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string $SelectionRules
 */
class StartMetadataModelAssessmentRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     SelectionRules: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
