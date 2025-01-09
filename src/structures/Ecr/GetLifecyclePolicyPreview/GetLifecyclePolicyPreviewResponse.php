<?php

namespace Sunaoka\Aws\Structures\Ecr\GetLifecyclePolicyPreview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $lifecyclePolicyText
 * @property 'IN_PROGRESS'|'COMPLETE'|'EXPIRED'|'FAILED' $status
 * @property string $nextToken
 * @property list<Shapes\LifecyclePolicyPreviewResult> $previewResults
 * @property Shapes\LifecyclePolicyPreviewSummary $summary
 */
class GetLifecyclePolicyPreviewResponse extends Response
{
}
