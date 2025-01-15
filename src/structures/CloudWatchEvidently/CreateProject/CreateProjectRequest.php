<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ProjectAppConfigResourceConfig|null $appConfigResource
 * @property Shapes\ProjectDataDeliveryConfig|null $dataDelivery
 * @property string|null $description
 * @property string $name
 * @property array<string, string>|null $tags
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     appConfigResource?: Shapes\ProjectAppConfigResourceConfig|null,
     *     dataDelivery?: Shapes\ProjectDataDeliveryConfig|null,
     *     description?: string|null,
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
