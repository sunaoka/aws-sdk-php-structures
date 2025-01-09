<?php

namespace Sunaoka\Aws\Structures\Translate\StopTextTranslationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class StopTextTranslationJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
