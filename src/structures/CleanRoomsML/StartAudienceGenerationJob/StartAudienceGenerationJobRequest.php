<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartAudienceGenerationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $configuredAudienceModelArn
 * @property Shapes\AudienceGenerationJobDataSource $seedAudience
 * @property bool $includeSeedInOutput
 * @property string $collaborationId
 * @property string $description
 * @property array<string, string> $tags
 */
class StartAudienceGenerationJobRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     configuredAudienceModelArn: string,
     *     seedAudience: Shapes\AudienceGenerationJobDataSource,
     *     includeSeedInOutput?: bool,
     *     collaborationId?: string,
     *     description?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
