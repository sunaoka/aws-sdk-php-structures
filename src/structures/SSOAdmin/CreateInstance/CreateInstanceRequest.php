<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $Name
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateInstanceRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Name?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
