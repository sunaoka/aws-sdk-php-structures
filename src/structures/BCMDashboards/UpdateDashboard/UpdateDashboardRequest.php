<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\UpdateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\Widget>|null $widgets
 */
class UpdateDashboardRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     description?: string|null,
     *     widgets?: list<Shapes\Widget>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
