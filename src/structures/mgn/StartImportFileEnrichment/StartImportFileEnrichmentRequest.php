<?php

namespace Sunaoka\Aws\Structures\mgn\StartImportFileEnrichment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\EnrichmentSourceS3Configuration $s3BucketSource
 * @property Shapes\EnrichmentTargetS3Configuration $s3BucketTarget
 * @property 'STATIC'|'DYNAMIC'|null $ipAssignmentStrategy
 */
class StartImportFileEnrichmentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     s3BucketSource: Shapes\EnrichmentSourceS3Configuration,
     *     s3BucketTarget: Shapes\EnrichmentTargetS3Configuration,
     *     ipAssignmentStrategy?: 'STATIC'|'DYNAMIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
