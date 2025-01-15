<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartAudienceExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $audienceGenerationJobArn
 * @property Shapes\AudienceSize $audienceSize
 * @property string|null $description
 */
class StartAudienceExportJobRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     audienceGenerationJobArn: string,
     *     audienceSize: Shapes\AudienceSize,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
