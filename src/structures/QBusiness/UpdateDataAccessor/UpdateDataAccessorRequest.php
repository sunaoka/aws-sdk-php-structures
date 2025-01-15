<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateDataAccessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $dataAccessorId
 * @property list<Shapes\ActionConfiguration> $actionConfigurations
 * @property string|null $displayName
 */
class UpdateDataAccessorRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     dataAccessorId: string,
     *     actionConfigurations: list<Shapes\ActionConfiguration>,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
