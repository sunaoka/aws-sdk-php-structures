<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateGatewayGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateGatewayGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     ClientRequestToken: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
