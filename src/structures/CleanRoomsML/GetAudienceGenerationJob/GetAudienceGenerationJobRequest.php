<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceGenerationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $audienceGenerationJobArn
 */
class GetAudienceGenerationJobRequest extends Request
{
    /**
     * @param array{audienceGenerationJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
