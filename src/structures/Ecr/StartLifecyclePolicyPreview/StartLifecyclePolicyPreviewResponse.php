<?php

namespace Sunaoka\Aws\Structures\Ecr\StartLifecyclePolicyPreview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property string|null $lifecyclePolicyText
 * @property 'IN_PROGRESS'|'COMPLETE'|'EXPIRED'|'FAILED'|null $status
 */
class StartLifecyclePolicyPreviewResponse extends Response
{
}
