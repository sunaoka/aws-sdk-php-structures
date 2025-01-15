<?php

namespace Sunaoka\Aws\Structures\Ecr\GetLifecyclePolicyPreview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property string|null $lifecyclePolicyText
 * @property 'IN_PROGRESS'|'COMPLETE'|'EXPIRED'|'FAILED'|null $status
 * @property string|null $nextToken
 * @property list<Shapes\LifecyclePolicyPreviewResult>|null $previewResults
 * @property Shapes\LifecyclePolicyPreviewSummary|null $summary
 */
class GetLifecyclePolicyPreviewResponse extends Response
{
}
