<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ProjectAppConfigResourceConfig $appConfigResource
 * @property Shapes\ProjectDataDeliveryConfig $dataDelivery
 * @property string $description
 * @property string $name
 * @property array<string, string> $tags
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     appConfigResource?: Shapes\ProjectAppConfigResourceConfig,
     *     dataDelivery?: Shapes\ProjectDataDeliveryConfig,
     *     description?: string,
     *     name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
