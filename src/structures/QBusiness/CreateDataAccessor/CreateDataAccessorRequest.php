<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateDataAccessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $principal
 * @property list<Shapes\ActionConfiguration> $actionConfigurations
 * @property string|null $clientToken
 * @property string $displayName
 * @property Shapes\DataAccessorAuthenticationDetail|null $authenticationDetail
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDataAccessorRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     principal: string,
     *     actionConfigurations: list<Shapes\ActionConfiguration>,
     *     clientToken?: string|null,
     *     displayName: string,
     *     authenticationDetail?: Shapes\DataAccessorAuthenticationDetail|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
