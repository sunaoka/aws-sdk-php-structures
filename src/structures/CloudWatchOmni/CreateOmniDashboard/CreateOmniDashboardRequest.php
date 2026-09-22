<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateOmniDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $name
 * @property string $body
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateOmniDashboardRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     name: string,
     *     body: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
