<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteAudienceGenerationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $audienceGenerationJobArn
 */
class DeleteAudienceGenerationJobRequest extends Request
{
    /**
     * @param array{audienceGenerationJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
