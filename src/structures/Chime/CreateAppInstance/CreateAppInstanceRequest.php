<?php

namespace Sunaoka\Aws\Structures\Chime\CreateAppInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Metadata
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAppInstanceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Metadata?: string|null,
     *     ClientRequestToken: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
