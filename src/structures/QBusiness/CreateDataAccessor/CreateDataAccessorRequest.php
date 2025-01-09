<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateDataAccessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $principal
 * @property list<Shapes\ActionConfiguration> $actionConfigurations
 * @property string $clientToken
 * @property string $displayName
 * @property list<Shapes\Tag> $tags
 */
class CreateDataAccessorRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     principal: string,
     *     actionConfigurations: list<Shapes\ActionConfiguration>,
     *     clientToken?: string,
     *     displayName: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
