<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateInstanceRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
