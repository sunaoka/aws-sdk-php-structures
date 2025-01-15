<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartAudienceGenerationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $configuredAudienceModelArn
 * @property Shapes\AudienceGenerationJobDataSource $seedAudience
 * @property bool|null $includeSeedInOutput
 * @property string|null $collaborationId
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class StartAudienceGenerationJobRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     configuredAudienceModelArn: string,
     *     seedAudience: Shapes\AudienceGenerationJobDataSource,
     *     includeSeedInOutput?: bool|null,
     *     collaborationId?: string|null,
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
