<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\CreateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\Widget> $widgets
 * @property list<Shapes\ResourceTag>|null $resourceTags
 */
class CreateDashboardRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     widgets: list<Shapes\Widget>,
     *     resourceTags?: list<Shapes\ResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
