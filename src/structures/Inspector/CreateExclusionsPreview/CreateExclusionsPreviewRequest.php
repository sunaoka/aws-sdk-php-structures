<?php

namespace Sunaoka\Aws\Structures\Inspector\CreateExclusionsPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentTemplateArn
 */
class CreateExclusionsPreviewRequest extends Request
{
    /**
     * @param array{assessmentTemplateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
