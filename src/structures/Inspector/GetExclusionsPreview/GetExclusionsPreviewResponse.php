<?php

namespace Sunaoka\Aws\Structures\Inspector\GetExclusionsPreview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'WORK_IN_PROGRESS'|'COMPLETED' $previewStatus
 * @property list<Shapes\ExclusionPreview>|null $exclusionPreviews
 * @property string|null $nextToken
 */
class GetExclusionsPreviewResponse extends Response
{
}
