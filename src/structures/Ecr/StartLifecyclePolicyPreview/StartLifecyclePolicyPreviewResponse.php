<?php

namespace Sunaoka\Aws\Structures\Ecr\StartLifecyclePolicyPreview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $lifecyclePolicyText
 * @property 'IN_PROGRESS'|'COMPLETE'|'EXPIRED'|'FAILED' $status
 */
class StartLifecyclePolicyPreviewResponse extends Response
{
}
